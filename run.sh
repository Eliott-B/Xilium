#!/bin/bash

if [ ! -d data ] ; then
    mkdir database/data
fi

docker compose up -d
