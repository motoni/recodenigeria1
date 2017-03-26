#!/bin/bash 


topKValue=10;


g++ `pkg-config --cflags --libs opencv` testCurrency.cpp -o currency-test -lopencv_core -lopencv_imgproc -lopencv_highgui -lopencv_objdetect -lopencv_xfeatures2d -lopencv_features2d -lopencv_flann -lopencv_calib3d -rpath /usr/local/Cellar/opencv3/HEAD-d0c64fc/lib;
./currency-test $1/dataFile.txt $1/vocabulary.bin $1/labels.txt $1/indicesSize.txt $1/allIndex.bin $topKValue $1/keypoints/ $2

rm currency-test;