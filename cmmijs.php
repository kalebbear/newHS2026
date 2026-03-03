<!DOCTYPE html>
<html lang="zh-CN">
<?php 
$pageTitle = '什么是CMMI';
$pageDescription = 'CMMI能力成熟度模型集成介绍，了解CMMI等级、评估方法和认证价值。';
$pageKeywords = '什么是CMMI,CMMI介绍,CMMI等级,CMMI评估';
?>
<?php include 'head.php'; ?>
  <link rel="stylesheet" href="synspace.com/en/main.css" />
  <body
    class="wp-singular page-template-default page wp-embed-responsive wp-theme-synspace"
  >
    <div id="app">
<?php include 'header.php'; ?>
      <main id="main" class="main">
<?php
;
$breadcrumbItems = [
    ['title' => '首页', 'url' => 'index.php'],
    ['title' => 'CMMI', 'url' => 'cmmi.php'],
    ['title' => '什么是CMMI', 'url' => null]
];
include 'pageheader.php';
?>
        <div class="m-ctypes">
          
          <!-- CMMI的来源 -->
          <section class="m-section" style="background-color: #f8f9fa;">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <h2 class="m-teaserboxwide__title" style="text-align: center; margin-bottom: 40px;">
                    <span class="red">CMMI的来源</span>
                  </h2>
                  <div style="background: #fff; padding: 40px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                    <p style="font-size: 16px; line-height: 1.8; color: #333; margin-bottom: 20px;">
                      CMMI（Capability Maturity Model Integration）即<strong>能力成熟度模型集成</strong>，其前身为CMM，原本是当年美国军方为了评估自己的软件产品供应商的过程质量水平，而委托<strong>美国卡内基梅隆大学软件工程学院（SEI）</strong>开发的一套过程评估体系。
                    </p>
                    <p style="font-size: 16px; line-height: 1.8; color: #333; margin-bottom: 20px;">
                      后来又被推广到全世界，成为全球软件企业重要的过程改进方法之一。后因其衍生品的派系林立（如：SW-CMM、SE-CMM、IPT-CMM等等），SEI决定在SW-CMM、SE-CMM的基础上，加入委外采购、IPPD等相关内容，并融合ISO9000部分理念，形成了今天我们看到的CMMI，这也就是CMMI中的"I"的由来。
                    </p>
                    <div style="background: #4a6fa5; color: #fff; padding: 20px; border-radius: 8px; text-align: center;">
                      <p style="margin: 0; font-size: 18px; font-weight: 600;">目前CMMI最新版本为2021年发布的V3.0版本</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- 什么是CMMI -->
          <section class="m-section">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <h2 class="m-teaserboxwide__title" style="text-align: center; margin-bottom: 40px;">
                    <span class="red">什么是CMMI</span>
                  </h2>
                  <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
                    <div style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-left: 4px solid #4a6fa5;">
                      <div style="width: 50px; height: 50px; background: #4a6fa5; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 20px; font-weight: bold; margin-bottom: 15px;">1</div>
                      <h4 style="margin: 0 0 10px 0; color: #333;">评估模型</h4>
                      <p style="margin: 0; color: #666; font-size: 14px; line-height: 1.6;">将研发机构的研发能力划分为5个级别</p>
                    </div>
                    <div style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-left: 4px solid #4a6fa5;">
                      <div style="width: 50px; height: 50px; background: #4a6fa5; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 20px; font-weight: bold; margin-bottom: 15px;">2</div>
                      <h4 style="margin: 0 0 10px 0; color: #333;">过程改进模型</h4>
                      <p style="margin: 0; color: #666; font-size: 14px; line-height: 1.6;">指导企业逐步进行过程改进</p>
                    </div>
                    <div style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-left: 4px solid #4a6fa5;">
                      <div style="width: 50px; height: 50px; background: #4a6fa5; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 20px; font-weight: bold; margin-bottom: 15px;">3</div>
                      <h4 style="margin: 0 0 10px 0; color: #333;">先进管理方法</h4>
                      <p style="margin: 0; color: #666; font-size: 14px; line-height: 1.6;">SEI对数千个项目调查总结的最佳实践集合</p>
                    </div>
                    <div style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-left: 4px solid #4a6fa5;">
                      <div style="width: 50px; height: 50px; background: #4a6fa5; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 20px; font-weight: bold; margin-bottom: 15px;">4</div>
                      <h4 style="margin: 0 0 10px 0; color: #333;">全面质量管理</h4>
                      <p style="margin: 0; color: #666; font-size: 14px; line-height: 1.6;">通过对过程的控制确保最终输出高质量产品</p>
                    </div>
                  </div>
                  <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; margin-top: 30px; text-align: center;">
                    <p style="margin: 0; color: #666; font-size: 14px;">CMMI产品包由<strong>CMMI模型</strong>、<strong>培训课程</strong>和<strong>评估方法</strong>三部分组成</p>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- CMMI的构成 -->
          <section class="m-section" style="background-color: #f8f9fa;">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <h2 class="m-teaserboxwide__title" style="text-align: center; margin-bottom: 40px;">
                    <span class="red">CMMI的构成</span>
                  </h2>
                  <div style="background: #fff; padding: 40px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                    <div style="text-align: center; margin-bottom: 30px;">
                      <div style="background: #4a6fa5; color: #fff; padding: 20px; border-radius: 8px; display: inline-block;">
                        <h4 style="margin: 0; font-size: 18px;">总目标：组织的过程的持续改进</h4>
                        <p style="margin: 5px 0 0 0; font-size: 14px; opacity: 0.9;">这也是CMMI的愿景</p>
                      </div>
                    </div>
                    
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-bottom: 30px;">
                      <div style="border: 2px solid #4a6fa5; border-radius: 8px; padding: 20px;">
                        <h4 style="color: #4a6fa5; margin: 0 0 15px 0;">特定目标（SG）</h4>
                        <p style="color: #666; font-size: 14px; line-height: 1.6; margin: 0;">特定目标下的实践被称为<strong>特定实践（SP）</strong></p>
                      </div>
                      <div style="border: 2px solid #4a6fa5; border-radius: 8px; padding: 20px;">
                        <h4 style="color: #4a6fa5; margin: 0 0 15px 0;">通用目标（GG）</h4>
                        <p style="color: #666; font-size: 14px; line-height: 1.6; margin: 0;">通用目标下的实践被称为<strong>通用实践（GP）</strong></p>
                      </div>
                    </div>

                    <h4 style="color: #333; margin-bottom: 20px;">过程域（PA）四大类别：</h4>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px;">
                      <div style="background: #f8f9fa; padding: 15px; border-radius: 8px; text-align: center; border: 1px solid #e9ecef;">
                        <div style="font-size: 24px; margin-bottom: 10px;">📊</div>
                        <h5 style="margin: 0; color: #4a6fa5;">过程管理类</h5>
                      </div>
                      <div style="background: #f8f9fa; padding: 15px; border-radius: 8px; text-align: center; border: 1px solid #e9ecef;">
                        <div style="font-size: 24px; margin-bottom: 10px;">📁</div>
                        <h5 style="margin: 0; color: #4a6fa5;">项目管理类</h5>
                      </div>
                      <div style="background: #f8f9fa; padding: 15px; border-radius: 8px; text-align: center; border: 1px solid #e9ecef;">
                        <div style="font-size: 24px; margin-bottom: 10px;">⚙️</div>
                        <h5 style="margin: 0; color: #4a6fa5;">工程类</h5>
                      </div>
                      <div style="background: #f8f9fa; padding: 15px; border-radius: 8px; text-align: center; border: 1px solid #e9ecef;">
                        <div style="font-size: 24px; margin-bottom: 10px;">🛠️</div>
                        <h5 style="margin: 0; color: #4a6fa5;">支持类</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- CMMI的实施与Level -->
          <section class="m-section">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <h2 class="m-teaserboxwide__title" style="text-align: center; margin-bottom: 40px;">
                    <span class="red">CMMI的实施与等级</span>
                  </h2>
                  
                  <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-bottom: 40px;">
                    <!-- 连续型 -->
                    <div style="background: #fff; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); overflow: hidden;">
                      <div style="background: #4a6fa5; color: #fff; padding: 20px;">
                        <h3 style="margin: 0; font-size: 20px;">连续型</h3>
                        <p style="margin: 10px 0 0 0; font-size: 14px; opacity: 0.9;">体现企业的能力度等级</p>
                      </div>
                      <div style="padding: 20px;">
                        <div style="display: flex; flex-direction: column; gap: 10px;">
                          <div style="display: flex; align-items: center; gap: 10px;">
                            <span style="background: #4a6fa5; color: #fff; padding: 5px 10px; border-radius: 4px; font-size: 12px;">0</span>
                            <span>不完整级</span>
                          </div>
                          <div style="display: flex; align-items: center; gap: 10px;">
                            <span style="background: #4a6fa5; color: #fff; padding: 5px 10px; border-radius: 4px; font-size: 12px;">1</span>
                            <span>执行级</span>
                          </div>
                          <div style="display: flex; align-items: center; gap: 10px;">
                            <span style="background: #4a6fa5; color: #fff; padding: 5px 10px; border-radius: 4px; font-size: 12px;">2</span>
                            <span>管理级</span>
                          </div>
                          <div style="display: flex; align-items: center; gap: 10px;">
                            <span style="background: #4a6fa5; color: #fff; padding: 5px 10px; border-radius: 4px; font-size: 12px;">3</span>
                            <span>定义级</span>
                          </div>
                          <div style="display: flex; align-items: center; gap: 10px;">
                            <span style="background: #4a6fa5; color: #fff; padding: 5px 10px; border-radius: 4px; font-size: 12px;">4</span>
                            <span>量化管理级</span>
                          </div>
                          <div style="display: flex; align-items: center; gap: 10px;">
                            <span style="background: #4a6fa5; color: #fff; padding: 5px 10px; border-radius: 4px; font-size: 12px;">5</span>
                            <span>佳化管理级</span>
                          </div>
                        </div>
                        <p style="margin: 20px 0 0 0; font-size: 14px; color: #666; font-style: italic;">企业可选择自己比较薄弱的，或是需要加强的一个或几个PA进行实施</p>
                      </div>
                    </div>

                    <!-- 阶段型 -->
                    <div style="background: #fff; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); overflow: hidden;">
                      <div style="background: #4a6fa5; color: #fff; padding: 20px;">
                        <h3 style="margin: 0; font-size: 20px;">阶段型</h3>
                        <p style="margin: 10px 0 0 0; font-size: 14px; opacity: 0.9;">体现企业的成熟度等级（国内选择最多）</p>
                      </div>
                      <div style="padding: 20px;">
                        <div style="display: flex; flex-direction: column; gap: 10px;">
                          <div style="display: flex; align-items: center; gap: 10px;">
                            <span style="background: #4a6fa5; color: #fff; padding: 5px 10px; border-radius: 4px; font-size: 12px;">1</span>
                            <span>初始级</span>
                          </div>
                          <div style="display: flex; align-items: center; gap: 10px;">
                            <span style="background: #4a6fa5; color: #fff; padding: 5px 10px; border-radius: 4px; font-size: 12px;">2</span>
                            <span>管理级</span>
                          </div>
                          <div style="display: flex; align-items: center; gap: 10px;">
                            <span style="background: #4a6fa5; color: #fff; padding: 5px 10px; border-radius: 4px; font-size: 12px;">3</span>
                            <span>定义级</span>
                          </div>
                          <div style="display: flex; align-items: center; gap: 10px;">
                            <span style="background: #4a6fa5; color: #fff; padding: 5px 10px; border-radius: 4px; font-size: 12px;">4</span>
                            <span>量化管理级</span>
                          </div>
                          <div style="display: flex; align-items: center; gap: 10px;">
                            <span style="background: #4a6fa5; color: #fff; padding: 5px 10px; border-radius: 4px; font-size: 12px;">5</span>
                            <span>优化管理级</span>
                          </div>
                        </div>
                        <p style="margin: 20px 0 0 0; font-size: 14px; color: #666; font-style: italic;">目前国内软件企业选择最多的实施方式</p>
                      </div>
                    </div>
                  </div>

                  <!-- 五个等级详解 -->
                  <h3 style="text-align: center; margin-bottom: 30px; color: #333;">阶段型五个等级关键特征</h3>
                  <div style="display: flex; flex-direction: column; gap: 20px;">
                    <div style="background: #fff; padding: 25px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-left: 5px solid #4a6fa5;">
                      <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 10px;">
                        <span style="background: #4a6fa5; color: #fff; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">1</span>
                        <h4 style="margin: 0; color: #4a6fa5;">初始级</h4>
                      </div>
                      <p style="margin: 0; color: #666; line-height: 1.6;">处在这一级别企业的项目开发过程始终处于黑盒状态，项目经常失控，对于关键开发人员的依赖性极大，项目组也始终处于一种救火式的状态。</p>
                    </div>

                    <div style="background: #fff; padding: 25px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-left: 5px solid #4a6fa5;">
                      <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 10px;">
                        <span style="background: #4a6fa5; color: #fff; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">2</span>
                        <h4 style="margin: 0; color: #4a6fa5;">管理级</h4>
                      </div>
                      <p style="margin: 0; color: #666; line-height: 1.6;">在这一级别时，企业的项目基本保持可控状态，项目组开始建立项目级的管理机制，开发过程由黑盒状态开始转向比较清晰的阶段化和里程碑化。</p>
                    </div>

                    <div style="background: #fff; padding: 25px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-left: 5px solid #4a6fa5;">
                      <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 10px;">
                        <span style="background: #4a6fa5; color: #fff; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">3</span>
                        <h4 style="margin: 0; color: #4a6fa5;">定义级</h4>
                      </div>
                      <p style="margin: 0; color: #666; line-height: 1.6;">企业由项目组级管理机制转向组织级管理机制，组织内的每一个项目组都遵循组织级开发过程进行开发工作。</p>
                    </div>

                    <div style="background: #fff; padding: 25px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-left: 5px solid #4a6fa5;">
                      <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 10px;">
                        <span style="background: #4a6fa5; color: #fff; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">4</span>
                        <h4 style="margin: 0; color: #4a6fa5;">量化管理级</h4>
                      </div>
                      <p style="margin: 0; color: #666; line-height: 1.6;">从这一级开始为CMMI的高成熟度级别，此时企业已建立了基本稳定地组织级开发过程，并对重要的子过程建立PPB（过程能力基线），再根据PPB间的数据逻辑关系建立PPM（过程能力模型），PPM是用于对项目开发过程进行预测的数学模型。</p>
                    </div>

                    <div style="background: #fff; padding: 25px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-left: 5px solid #4a6fa5;">
                      <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 10px;">
                        <span style="background: #4a6fa5; color: #fff; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">5</span>
                        <h4 style="margin: 0; color: #4a6fa5;">优化管理级</h4>
                      </div>
                      <p style="margin: 0; color: #666; line-height: 1.6;">企业通过PPB、PPM的量化分析，找到组织开发过程中的公共原因偏差，并通过组织级的优化、改进、以及变革，逐步加以解决，来达到企业自我改进的目的。</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- CMMI的评估 -->
          <section class="m-section" style="background-color: #f8f9fa;">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <h2 class="m-teaserboxwide__title" style="text-align: center; margin-bottom: 40px;">
                    <span class="red">CMMI的评估</span>
                  </h2>
                  <div style="background: #fff; padding: 40px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                    <div style="text-align: center; margin-bottom: 30px;">
                      <div style="background: #4a6fa5; color: #fff; padding: 15px 30px; border-radius: 8px; display: inline-block;">
                        <h4 style="margin: 0; font-size: 16px;">SCAMPI评估方法</h4>
                        <p style="margin: 5px 0 0 0; font-size: 13px; opacity: 0.9;">Standard CMMI Appraisal Method for Process Improvement</p>
                      </div>
                    </div>

                    <div style="margin-bottom: 30px;">
                      <h4 style="color: #333; margin-bottom: 15px;">评估内容</h4>
                      <p style="color: #666; line-height: 1.8; margin-bottom: 15px;">主要检查企业实际项目和日常运作中产生的数据、文档、邮件、会议纪要、项目报告、自动化工具等各方面的记录，并对员工进行抽样访谈，了解企业员工实际开展项目的方式。</p>
                    </div>

                    <div style="background: #f8f9fa; padding: 25px; border-radius: 8px;">
                      <h4 style="color: #333; margin-bottom: 20px;">评估团队组成</h4>
                      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
                        <div style="display: flex; align-items: flex-start; gap: 15px;">
                          <div style="width: 50px; height: 50px; background: #4a6fa5; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-weight: bold; flex-shrink: 0;">LA</div>
                          <div>
                            <h5 style="margin: 0 0 5px 0; color: #333;">主任评估师</h5>
                            <p style="margin: 0; color: #666; font-size: 14px;">Lead Appraiser<br/>SEI授权</p>
                          </div>
                        </div>
                        <div style="display: flex; align-items: flex-start; gap: 15px;">
                          <div style="width: 50px; height: 50px; background: #4a6fa5; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-weight: bold; flex-shrink: 0;">ATM</div>
                          <div>
                            <h5 style="margin: 0 0 5px 0; color: #333;">评估团队成员</h5>
                            <p style="margin: 0; color: #666; font-size: 14px;">Appraisal Team Members</p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div style="margin-top: 30px; padding: 20px; background: #f8f9fa; border-radius: 8px; text-align: center;">
                      <p style="margin: 0; color: #4a6fa5; font-size: 14px;">评估全程受SEI监控，最终在SEI官方网站上通报评估结果</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- CTA Section -->
          <section class="m-section">
            <div class="container">
              <div class="row">
                <div class="col-12" style="text-align: center;">
                  <h2 class="m-teaserboxwide__title" style="margin-bottom: 20px;">
                    <span class="red">需要CMMI认证咨询？</span>
                  </h2>
                  <p style="color: #666; margin-bottom: 30px; font-size: 16px;">我们的专业团队将为您提供全方位的CMMI认证咨询服务</p>
                  <a href="contact.php" class="btn btn-primary" style="background-color: #4a6fa5; border-color: #4a6fa5; padding: 12px 30px; font-size: 16px;">联系我们</a>
                </div>
              </div>
            </div>
          </section>

        </div>
      </main>
<?php include 'footer.php'; ?>
    </div>
<?php include 'scripts.php'; ?>
  </body>
</html>
