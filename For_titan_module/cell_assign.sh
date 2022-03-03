
export PATH=/home/genomics/anaconda2/envs/my_pythong_3_7/bin:$PATH

FOLDER_PATH=$3

cd $FOLDER_PATH/

touch test.csv

#source activate my_pythong_3_7

/home/genomics/anaconda2/bin/Rscript /var/www/html/script/cellassign_v1.R $1 $2

echo "Subject: cell population identification is done" | sendmail -v yizhou.wang@cshs.org



