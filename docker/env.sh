#!/bin/bash

# 切換到 evn.sh 檔案目錄底下
BASEDIR=$(dirname "$0")
cd "$BASEDIR"
clear

while :
do
    # 選擇要啟動的系統
    printf "\E[0;30;47m"
    echo "                HypeNode                "
    printf "\E[0m"

    printf "\E[0;32;40m"
    echo "----------------------------------------"
    echo "            選擇要啟動的系統            "
    echo "----------------------------------------"
    printf "\E[0m"

    echo -e "  \033[31ma.\033[0m 所有 Server"
    echo -e "  \033[31m1.\033[0m PHP"
    echo -e "  \033[31m2.\033[0m Nginx"
    echo -e "  \033[31m3.\033[0m Mariadb"
    echo -e "  \033[31m4.\033[0m PhpMyAdmin"
    echo -e "  \033[31m5.\033[0m Redis"

    printf "\E[0;32;40m"
    echo "----------------------------------------"
    echo "                 工具                   "
    echo "----------------------------------------"
    printf "\E[0m"

    echo -e "  \033[31mr.\033[0m 重啟 Docker 所有容器"
    echo -e "  \033[31mc.\033[0m 關閉 Docker 所有容器"
    echo -e "  \033[31ml.\033[0m 顯示 Docker 所有容器"
    echo -e "  \033[31md.\033[0m 指定重啟 Docker 項目編號容器"
    echo -e "      - Example: 重啟 PHP 容器"
    echo -e "      - input: d 1"
    echo -e "  \033[31mq.\033[0m Exit"

    printf "\E[0;32;40m"
    echo "----------------------------------------"
    echo "           選擇 migrate 設定            "
    echo "----------------------------------------"
    printf "\E[0m"


    echo -e "  \033[31mmg.\033[0m 執行 migrate"
    echo -e "  \033[31mrb.\033[0m 執行 rollback"

    printf "\E[0;32;40m"
    echo "----------------------------------------"
    printf "\E[0m"
    printf "\E[0;31m"
    read -p "Input:" input input2
    printf "\E[0m"


    clear

    case $input in
        a)
            # 啟動 php
            docker-compose up -d --build php
            # 啟動 nginx
            docker-compose up -d --build nginx
            # 啟動 mysql
            docker-compose up -d --build mariadb
            # 啟動 phpmyadmin_mysql
            docker-compose up -d --build phpmyadmin
            # 啟動 redis
            docker-compose up -d --build redis
            ;;
        1)
            # 啟動 php
            docker-compose up -d --build php
            ;;
        2)
            # 啟動 nginx
            docker-compose up -d --build nginx
            ;;
        3)
            # 啟動 mysql
            docker-compose up -d --build mariadb
            ;;
        4)
            # 啟動 phpmyadmin_mysql
            docker-compose up -d --build phpmyadmin
            ;;
        5)
            # 啟動 redis
            docker-compose up -d --build redis
            ;;
        r)
            # 關閉透過 docker-compose 產生的 container
            docker-compose down
            # 啟動 php
            docker-compose up -d --build php
            # 啟動 nginx
            docker-compose up -d --build nginx
            # 啟動 mysql
            docker-compose up -d --build mariadb
            # 啟動 phpmyadmin_mysql
            docker-compose up -d --build phpmyadmin
            # 啟動 redis
            docker-compose up -d --build redis
            ;;
        l)
            # 查看目前的 container
            docker ps -a
            ;;
        c)
            # 關閉透過 docker-compose 產生的 container
            docker-compose down
            ;;
        d)
            # 重啟指定的服務
            if [  "$input2" == "" ]; then
                echo "which service do you want to shutdown?"
            else
                case $input2 in
                    1)
                        docker rm -f php
                        docker-compose up -d --build php
                        ;;
                    2)
                        docker rm -f nginx
                        docker-compose up -d --build nginx
                        ;;
                    3)
                        docker rm -f mariadb
                        docker-compose up -d --build mariadb
                        ;;
                    4)
                        docker rm -f phpmyadmin_mysql
                        docker-compose up -d --build phpmyadmin
                        ;;
                    5)
                        docker rm -f redis
                        docker-compose up -d --build redis
                        ;;
                esac
            fi
            ;;
        mg)
            # 執行 migrate
            php ./vendor/bin/phinx migrate
            ;;
        rb)
            # 執行 rollback
            php ./vendor/bin/phinx rollback -t 0
            ;;
        *)
            # 離開程序
            exit
            ;;
    esac
done