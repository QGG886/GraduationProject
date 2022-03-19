<?php
//文物
class CulturalRelic{
  //主键
  var $Id;
  //文物名称
  var $Name;
  //朝代
  var $Dynasty;
  //地区
  var $Region;
  //简介
  var $Introduction;
  //相关人物
  var $Personages;
  //相关文献
  var $Literatures;
  //相关故事
  var $Stories;
}

//人物
class Personage{
  //主键
  var $Id;
  //名称
  var $Name;
  //朝代
  var $Dynasty;
  //地区
  var $Region;
  //简介
  var $Introduction;
  //相关文献
  var $Literatures;
  //相关故事
  var $Stories;
  //相关文物
  var $CulturalRelic;
}

//文献
class Literature{
  //主键
  var $Id;
  //名称
  var $Name;
  //朝代
  var $Dynasty;
  //地区
  var $Region;
  //简介
  var $Introduction;
  //相关人物
  var $Personages;
  //相关故事
  var $Stories;
  //相关文物
  var $CulturalRelic;
}

//故事
class Story{
  //主键
  var $Id;
  //名称
  var $Name;
  //朝代
  var $Dynasty;
  //地区
  var $Region;
  //简介
  var $Introduction;
  //相关人物
  var $Personages;
  //相关文献
  var $Literatures;
  //相关文物
  var $CulturalRelic;
}

//学术会议
class AcademicConference {
  var $Id;
  var $Name;
  var $Introduction;
  var $Region;
  var $Datetime;
}