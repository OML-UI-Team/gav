<?php

if(mail("pankaj.kumar@omlogic.co.in", "Tets Mail", "Hii, This is testing so ignore it. Thanks")) {
    echo "Sent!";
} else {
    echo "Not Sent!";
}