#include <opencv2/opencv.hpp>
#include "opencv2/xfeatures2d.hpp"

const bool DISPLAY  = 0;
const bool writeToYML = 0;
const char KEYPOINTS_DIRECTORY[50] = "keypoints";

const float WIDTH = 480.0;
const float TEST_WIDTH = 640.0;
const int MAXIMAL_KEYPOINTS = 500;
const char txtFiles[6][30] = {"ten", "twenty", "fifty", "hundred", "fivehundred", "thousand"};


//cv::SiftFeatureDetector detector( MAXIMAL_KEYPOINTS );
//cv::Ptr<cv::FeatureDetector> detector(new cv::xfeatures2d::SiftFeatureDetector());
cv::xfeatures2d::SiftDescriptorExtractor extract;
cv::Ptr<cv::Feature2D> detector = cv::xfeatures2d::SIFT::create();

/*
//cv::xfeatures2d::SiftDescriptorExtractor detector;
cv::Ptr<cv::FeatureDetector> detector(new cv::xfeatures2d::SiftFeatureDetector());
cv::xfeatures2d::SiftDescriptorExtractor extract;
*/

cv::Ptr<cv::Feature2D> extractor = cv::xfeatures2d::SiftDescriptorExtractor::create();

struct invertedIndex
{
  std::vector<int> imgIndex;
  std::vector<float> weightedHistValue;
};
