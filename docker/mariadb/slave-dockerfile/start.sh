#!/bin/sh

#if [ "${TUTUM_SERVICE_API_URL}x" != "x" ]; then
#	T=$(curl -s -H "Authorization: $TUTUM_AUTH" -H "Accept: application/json" $TUTUM_SERVICE_API_URL | tr ',' '\n' | grep ENV_TUTUM_IP_ADDRESS | grep -v ${TUTUM_IP_ADDRESS} | awk -F\" '{print $4}' | awk -F\/ '{print $1}' | sort -u)
#	CLUSTER=""
#	for Y in $T; do
#	    CLUSTER="${CLUSTER}${Y},"
#	done
#fi
#
#CLUSTER="${CLUSTER%?}"
#NODE_ADDR=$(echo ${TUTUM_IP_ADDRESS} | awk -F\/ '{print $1}')
#
#if [ "x${CLUSTER}" = "x" ]; then
#    echo "I'm alone ${NODE_ADDR} Bootstrap Cluster (Throw away container if this is not the first container)"
#    CLUSTER="gcomm://"
#else
#    echo "I'm not alone! My buddies: ${CLUSTER} and me ${NODE_ADDR}"
#    CLUSTER="gcomm://${CLUSTER}"
#fi

INNOBDB_BUFFER_POOL_SIZE=$((`cat /proc/meminfo | grep MemTotal | cut -d ' ' -f 9` / 2000))M
echo /docker-entrypoint.sh --innodb_buffer-pool-size=$INNOBDB_BUFFER_POOL_SIZE --wsrep_sst_auth=wsrep_sst_auth --wsrep_node_address="mariadb-slave01" --wsrep_node_incoming_address="mariadb-slave01" --wsrep_cluster_address="gcomm://mariadb-master" --wsrep_node_name="mariadb-slave01"
/docker-entrypoint.sh --innodb_buffer-pool-size=$INNOBDB_BUFFER_POOL_SIZE --wsrep_sst_auth=${wsrep_sst_auth} --wsrep_node_address="mariadb-slave01" --wsrep_node_incoming_address="mariadb-slave01" --wsrep_cluster_address="gcomm://mariadb-master" --wsrep_node_name="mariadb-slave01"