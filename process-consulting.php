<!DOCTYPE html>
<html lang="zh-CN">
<?php 
$pageTitle = '流程落地咨询';
$pageDescription = '华赛咨询提供研发流程落地咨询服务，帮助企业建立和优化研发管理体系。';
$pageKeywords = '流程咨询,研发流程,流程落地,管理咨询';
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
    ['title' => '流程落地咨询', 'url' => null]
];
include 'pageheader.php';
?>
        <div class="m-ctypes">
          <section class="m-section">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  
                  
                  <div style="margin-bottom: 60px;">
                    <h3 style="margin-bottom: 40px; color: #333; text-align: center;">Challenges of process implementation<br />研发流程落地困难</h3>
                    
                    <div style="position: relative; width: 100%; max-width: 800px; margin: 0 auto 40px auto; height: 600px;">
                      <canvas id="wordCloudCanvas" width="800" height="600" style="width: 100%; height: 100%;"></canvas>
                      
                      <div style="position: absolute; top: 30px; left: 50px;">
                        <div style="background: #f0f0f0; padding: 10px 20px; border-radius: 20px; display: inline-block; border: 1px solid #ccc; font-size: 16px;">两张皮</div>
                      </div>
                      <div style="position: absolute; top: 100px; left: 20px;">
                        <div style="background: #f0f0f0; padding: 10px 20px; border-radius: 20px; display: inline-block; border: 1px solid #ccc; font-size: 16px;">官僚游戏</div>
                      </div>
                      <div style="position: absolute; top: 180px; left: 0px;">
                        <div style="background: #f0f0f0; padding: 10px 20px; border-radius: 20px; display: inline-block; border: 1px solid #ccc; font-size: 16px;">流程不适合</div>
                      </div>
                      <div style="position: absolute; top: 260px; left: 10px;">
                        <div style="background: #f0f0f0; padding: 10px 20px; border-radius: 20px; display: inline-block; border: 1px solid #ccc; font-size: 16px;">无法落地</div>
                      </div>
                      <div style="position: absolute; top: 340px; left: 30px;">
                        <div style="background: #f0f0f0; padding: 10px 20px; border-radius: 20px; display: inline-block; border: 1px solid #ccc; font-size: 16px;">形式主义</div>
                      </div>
                      
                      <div style="position: absolute; top: 30px; right: 50px;">
                        <div style="background: #f0f0f0; padding: 10px 20px; border-radius: 20px; display: inline-block; border: 1px solid #ccc; font-size: 16px;">流程太复杂</div>
                      </div>
                      <div style="position: absolute; top: 100px; right: 20px;">
                        <div style="background: #f0f0f0; padding: 10px 20px; border-radius: 20px; display: inline-block; border: 1px solid #ccc; font-size: 16px;">有形无实</div>
                      </div>
                      <div style="position: absolute; top: 180px; right: 0px;">
                        <div style="background: #f0f0f0; padding: 10px 20px; border-radius: 20px; display: inline-block; border: 1px solid #ccc; font-size: 16px;">形似神不似</div>
                      </div>
                      <div style="position: absolute; top: 260px; right: 10px;">
                        <div style="background: #f0f0f0; padding: 10px 20px; border-radius: 20px; display: inline-block; border: 1px solid #ccc; font-size: 16px;">文档太多</div>
                      </div>
                      <div style="position: absolute; top: 340px; right: 30px;">
                        <div style="background: #f0f0f0; padding: 10px 20px; border-radius: 20px; display: inline-block; border: 1px solid #ccc; font-size: 16px;">流于形式</div>
                      </div>
                    </div>
                    
                    <div style="max-width: 1000px; margin: 0 auto 40px auto; padding: 30px; background: #f9f9f9; border-radius: 8px;">
                      <p style="font-size: 16px; line-height: 1.8; color: #333; margin-bottom: 25px; text-align: center;">
                        企业为了提升研发管理，建立了各种流程体系，但往往事与愿违，没有将体系落地变成习惯问题。
                      </p>
                      <ul style="font-size: 15px; line-height: 2; color: #333; margin: 0; padding-left: 25px; max-width: 900px; margin: 0 auto;">
                        <li><span style="color: #dc3545; font-weight: bold;">●</span> 实施CMMI的企业建立了很多制度和流程，但是制度太理想化，执行起来很困难，变成了两张皮；</li>
                        <li><span style="color: #dc3545; font-weight: bold;">●</span> 实施ASPICE的企业文档很多，但是看起来好像都对，但实际上大家都不理解，没有变更；</li>
                        <li><span style="color: #dc3545; font-weight: bold;">●</span> 实施IPD的企业搞了很多文档，但是产品开发流程还是没有按照研发流程走，项目管理依然很混乱；</li>
                        <li><span style="color: #dc3545; font-weight: bold;">●</span> 实施GJB5000B的企业流程很好，文档齐全，但是各流程之间相互脱节，流程执行困难；</li>
                        <li><span style="color: #dc3545; font-weight: bold;">●</span> 实施SCAMPI的企业流程很好了，太复杂了，只剩下了一堆流程，一点都不像研发；</li>
                      </ul>
                    </div>
                    
                    <div style="max-width: 1000px; margin: 0 auto;">
                      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                        <div style="background: #f0f0f0; padding: 20px; border-radius: 8px;">
                          <div style="font-weight: bold; color: #333; margin-bottom: 10px; font-size: 16px;">管理层的感受</div>
                          <div style="font-size: 14px; color: #666; line-height: 1.7;">知道很多问题要解决，但是根本无力回天，团队之间也很难互相协作，各种体系好像都试过，却越来越累，产品开发还是不确定，总是担心出问题。</div>
                        </div>
                        <div style="background: #f0f0f0; padding: 20px; border-radius: 8px;">
                          <div style="font-weight: bold; color: #333; margin-bottom: 10px; font-size: 16px;">质量部的感受</div>
                          <div style="font-size: 14px; color: #666; line-height: 1.7;">有标准但是不执行，QA总是吃力不讨好，QA也很忙，每天都在审核和检查，但是大家却不怎么配合，QA越来越辛苦，工作也没有成就感。</div>
                        </div>
                        <div style="background: #f0f0f0; padding: 20px; border-radius: 8px;">
                          <div style="font-weight: bold; color: #333; margin-bottom: 10px; font-size: 16px;">体系部的感受</div>
                          <div style="font-size: 14px; color: #666; line-height: 1.7;">流程体系很完善，我们也不想，我们只是执行流程而已，QA一天到晚在审核，弄得大家都觉得是形式主义，每天都在忙着应付这个审核那个评审，真的是又烦又累。</div>
                        </div>
                        <div style="background: #f0f0f0; padding: 20px; border-radius: 8px;">
                          <div style="font-weight: bold; color: #333; margin-bottom: 10px; font-size: 16px;">项目组的感受</div>
                          <div style="font-size: 14px; color: #666; line-height: 1.7;">文档又多又麻烦，根本没有时间做开发，执行了也是走过场，QA一天到晚在盯着文档交不出来，大家都一堆的问题，这样干下去迟早要崩溃。</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div style="margin-bottom: 60px;">
                    <h3 style="margin-bottom: 40px; color: #333; text-align: center;">Our solution<br />我们的实施思路</h3>
                    
                    <div style="display: flex; align-items: flex-start; gap: 20px; margin-bottom: 40px; max-width: 900px; margin: 0 auto 40px auto;">
                      <div style="writing-mode: vertical-rl; text-orientation: upright; background: #4a6fa5; color: #fff; padding: 30px 10px; font-size: 18px; font-weight: bold; border-radius: 4px; letter-spacing: 8px; display: flex; align-items: center; justify-content: center; align-self: center;">流程落地咨询</div>
                      
                      <div style="flex-grow: 1; border: 2px dashed #ccc; border-radius: 8px; padding: 30px; background: #fff;">
                        <div style="display: flex; flex-direction: column; gap: 15px;">
                          <div style="display: flex; gap: 15px; align-items: center;">
                            <div style="background: #4a6fa5; color: #fff; padding: 12px 20px; text-align: center; border-radius: 4px; font-size: 16px; min-width: 60px;">人</div>
                            <div style="background: #6b8cae; color: #fff; padding: 12px 25px; text-align: center; border-radius: 4px; font-size: 15px; flex: 1;">人的能力</div>
                            <div style="background: #6b8cae; color: #fff; padding: 12px 25px; text-align: center; border-radius: 4px; font-size: 15px; flex: 1;">人的意愿</div>
                          </div>
                          <div style="display: flex; gap: 15px; align-items: center;">
                            <div style="background: #4a6fa5; color: #fff; padding: 12px 20px; text-align: center; border-radius: 4px; font-size: 16px; min-width: 60px;">组织</div>
                            <div style="background: #6b8cae; color: #fff; padding: 12px 25px; text-align: center; border-radius: 4px; font-size: 15px; flex: 1;">流程的适用性</div>
                            <div style="background: #6b8cae; color: #fff; padding: 12px 25px; text-align: center; border-radius: 4px; font-size: 15px; flex: 1;">经验的传承</div>
                          </div>
                          <div style="display: flex; gap: 15px; align-items: center;">
                            <div style="background: #4a6fa5; color: #fff; padding: 12px 20px; text-align: center; border-radius: 4px; font-size: 16px; min-width: 60px;">AI</div>
                            <div style="background: #6b8cae; color: #fff; padding: 12px 25px; text-align: center; border-radius: 4px; font-size: 15px; flex: 1;">AI赋能开发</div>
                            <div style="background: #6b8cae; color: #fff; padding: 12px 25px; text-align: center; border-radius: 4px; font-size: 15px; flex: 1;">AI赋能管理</div>
                          </div>
                        </div>
                      </div>
                    </div>
                        
                        <div style="background: #fff; padding: 30px; border-radius: 8px; margin-bottom: 30px; border: 1px solid #e0e0e0;">
                          <h4 style="margin-bottom: 20px; color: #333; font-weight: 600; font-size: 18px;">咨询思路：</h4>
                          <div style="display: flex; gap: 20px; flex-wrap: wrap;">
                            <div style="flex: 1; min-width: 200px; display: flex; align-items: center; gap: 10px; padding: 15px; background: #f8f9fa; border-radius: 6px;">
                              <span style="color: #4a6fa5; font-size: 20px;">●</span>
                              <span style="color: #333; font-size: 15px;">以转变人的思想意识为主</span>
                            </div>
                            <div style="flex: 1; min-width: 200px; display: flex; align-items: center; gap: 10px; padding: 15px; background: #f8f9fa; border-radius: 6px;">
                              <span style="color: #4a6fa5; font-size: 20px;">●</span>
                              <span style="color: #333; font-size: 15px;">以提升流程的适用性为辅</span>
                            </div>
                            <div style="flex: 1; min-width: 200px; display: flex; align-items: center; gap: 10px; padding: 15px; background: #f8f9fa; border-radius: 6px;">
                              <span style="color: #4a6fa5; font-size: 20px;">●</span>
                              <span style="color: #333; font-size: 15px;">以AI赋能产品开发和管理</span>
                            </div>
                          </div>
                        </div>
                        
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-bottom: 30px;">
                          <div>
                            <div style="background: #333; color: #fff; padding: 12px 20px; border-radius: 4px; text-align: center; font-weight: bold; margin-bottom: 20px; font-size: 16px;">重点关注：</div>
                            <ul style="font-size: 15px; line-height: 2; color: #333; margin: 0; padding-left: 20px;">
                              <li>高层管理人员的"领导力"</li>
                              <li>中层干部的"人员管理能力"</li>
                              <li>体系部和QA的"专业能力"</li>
                              <li>项目组的"专业能力"</li>
                              <li>人力资源部的"企业文化建设能力"</li>
                              <li>数字化工具的"个人成长与工作意愿"</li>
                            </ul>
                          </div>
                          <div>
                            <div style="background: #333; color: #fff; padding: 12px 20px; border-radius: 4px; text-align: center; font-weight: bold; margin-bottom: 20px; font-size: 16px;">我们认为：</div>
                            <ul style="font-size: 15px; line-height: 2; color: #333; margin: 0; padding-left: 20px;">
                              <li>执行力的提升来自于人员能力的提升</li>
                              <li>流程体系要想落地就需要简单</li>
                              <li>要转变人的思想意识而不是流于形式</li>
                              <li>只要体系思想和方法就真正的落地</li>
                              <li>没有任何流程体系对所有环境都适合</li>
                            </ul>
                          </div>
                        </div>
                        
                        <div>
                          <div style="background: #333; color: #fff; padding: 12px 20px; border-radius: 4px; text-align: center; font-weight: bold; margin-bottom: 25px; font-size: 16px;">服务流程：</div>
                          <div style="display: flex; justify-content: space-between; align-items: center; gap: 15px; flex-wrap: wrap;">
                            <div style="text-align: center; padding: 15px 10px; border: 1px solid #333; border-radius: 4px; flex: 1; min-width: 120px;">
                              <div style="font-weight: bold; font-size: 16px;">定义问题</div>
                              <div style="font-size: 13px; margin-top: 8px;">分析现状<br />确定目标</div>
                            </div>
                            <div style="color: #333; font-size: 24px;">→</div>
                            <div style="text-align: center; padding: 15px 10px; border: 1px solid #333; border-radius: 4px; flex: 1; min-width: 120px;">
                              <div style="font-weight: bold; font-size: 16px;">意识改造</div>
                              <div style="font-size: 13px; margin-top: 8px;">团队辅导<br />管理培训</div>
                            </div>
                            <div style="color: #333; font-size: 24px;">→</div>
                            <div style="text-align: center; padding: 15px 10px; border: 1px solid #333; border-radius: 4px; flex: 1; min-width: 120px;">
                              <div style="font-weight: bold; font-size: 16px;">制订方案</div>
                              <div style="font-size: 13px; margin-top: 8px;">流程优化<br />培训工具</div>
                            </div>
                            <div style="color: #333; font-size: 24px;">→</div>
                            <div style="text-align: center; padding: 15px 10px; border: 1px solid #333; border-radius: 4px; flex: 1; min-width: 120px;">
                              <div style="font-weight: bold; font-size: 16px;">实施方案</div>
                              <div style="font-size: 13px; margin-top: 8px;">试点项目<br />数据收集</div>
                            </div>
                            <div style="color: #333; font-size: 24px;">→</div>
                            <div style="text-align: center; padding: 15px 10px; border: 1px solid #333; border-radius: 4px; flex: 1; min-width: 120px;">
                              <div style="font-weight: bold; font-size: 16px;">全面展开</div>
                              <div style="font-size: 13px; margin-top: 8px;">体系完善<br />后续支持</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div style="text-align: center; margin-bottom: 60px;">
                    <div style="border-top: 2px solid #333; padding-top: 20px;">
                      <h2 style="font-size: 28px; font-weight: bold; color: #333; margin: 0;">华赛专业提供流程落地咨询服务</h2>
                    </div>
                  </div>
                  
                  <h2 class="m-teaserboxwide__title" style="text-align: center; margin-bottom: 40px;">
                    <span class="red">Process implementation courses<br />流程落地类课程</span>
                  </h2>
                  
                  <div style="max-width: 1000px; margin: 0 auto;">
                    <table style="width: 100%; border-collapse: collapse; margin-bottom: 40px;">
                      <tbody>
                        <tr style="background: #f0f0f0;">
                          <td style="border: 1px solid #ccc; padding: 15px; width: 40%;">CMMI流程落地</td>
                          <td style="border: 1px solid #ccc; padding: 15px;">如何转变人员思想意识促进CMMI流程落地。</td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ccc; padding: 15px;">IPD流程落地</td>
                          <td style="border: 1px solid #ccc; padding: 15px;">如何转变人员思想意识促进IPD流程落地。</td>
                        </tr>
                        <tr style="background: #f0f0f0;">
                          <td style="border: 1px solid #ccc; padding: 15px;">ASPICE流程落地</td>
                          <td style="border: 1px solid #ccc; padding: 15px;">如何转变人员思想意识促进ASPICE流程落地。</td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ccc; padding: 15px;">GJB5000B流程落地</td>
                          <td style="border: 1px solid #ccc; padding: 15px;">如何转变人员思想意识促进GJB5000B流程落地。</td>
                        </tr>
                        <tr style="background: #f0f0f0;">
                          <td style="border: 1px solid #ccc; padding: 15px;">变革先锋生存指南</td>
                          <td style="border: 1px solid #ccc; padding: 15px;">体系部、QA部人员如何推行实施流程体系。</td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ccc; padding: 15px;">如何保持流程改善激情</td>
                          <td style="border: 1px solid #ccc; padding: 15px;">高级管理者如何促进持续改善，打造有活力的组织。</td>
                        </tr>
                        <tr style="background: #f0f0f0;">
                          <td style="border: 1px solid #ccc; padding: 15px;">变革阻力管理</td>
                          <td style="border: 1px solid #ccc; padding: 15px;">高级管理者如何将其期望和想法落实到一线工作。</td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ccc; padding: 15px;">影响力</td>
                          <td style="border: 1px solid #ccc; padding: 15px;">高级管理者和质量人员如何改变他人的思想意识。</td>
                        </tr>
                        <tr style="background: #f0f0f0;">
                          <td style="border: 1px solid #ccc; padding: 15px;">研发工作的质量意识建设</td>
                          <td style="border: 1px solid #ccc; padding: 15px;">如何让研发流程中各环节工作人员重视工作质量。</td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ccc; padding: 15px;">开发人员工作意愿的提升</td>
                          <td style="border: 1px solid #ccc; padding: 15px;">为管理层讲解如何让开发人员愿意主动、积极工作。</td>
                        </tr>
                        <tr style="background: #f0f0f0;">
                          <td style="border: 1px solid #ccc; padding: 15px;">需求稳定度提升</td>
                          <td style="border: 1px solid #ccc; padding: 15px;">如何促使需求人员深入分析，提升需求稳定度。</td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ccc; padding: 15px;">评审效果提升</td>
                          <td style="border: 1px solid #ccc; padding: 15px;">如何促使评审人员愿意投入、深入评审。</td>
                        </tr>
                        <tr style="background: #f0f0f0;">
                          <td style="border: 1px solid #ccc; padding: 15px;">发挥QA作用</td>
                          <td style="border: 1px solid #ccc; padding: 15px;">如何让质量管理工作发挥其应有的价值。</td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ccc; padding: 15px;">有价值的项目管理</td>
                          <td style="border: 1px solid #ccc; padding: 15px;">如何让项目管理工作发挥其应有的价值。</td>
                        </tr>
                        <tr style="background: #f0f0f0;">
                          <td style="border: 1px solid #ccc; padding: 15px;">有价值的配置管理</td>
                          <td style="border: 1px solid #ccc; padding: 15px;">如何让配置管理工作发挥其应有的价值。</td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ccc; padding: 15px;">测试的严谨性</td>
                          <td style="border: 1px solid #ccc; padding: 15px;">如何让测试人员以更严谨的态度开展测试工作。</td>
                        </tr>
                        <tr style="background: #f0f0f0;">
                          <td style="border: 1px solid #ccc; padding: 15px;">榜样的力量</td>
                          <td style="border: 1px solid #ccc; padding: 15px;">讲解中高层管理干部如何带好下属、激励下属。</td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ccc; padding: 15px;">从技术走向管理</td>
                          <td style="border: 1px solid #ccc; padding: 15px;">讲解技术管理者如何转变思想，真正带好团队。</td>
                        </tr>
                        <tr style="background: #f0f0f0;">
                          <td style="border: 1px solid #ccc; padding: 15px;">产品经理的定位</td>
                          <td style="border: 1px solid #ccc; padding: 15px;">为产品经理讲解如何做一个好的产品经理。</td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ccc; padding: 15px;">个人与组织的关系</td>
                          <td style="border: 1px solid #ccc; padding: 15px;">为一线开发人员讲解为什么要认真工作。</td>
                        </tr>
                        <tr style="background: #f0f0f0;">
                          <td style="border: 1px solid #ccc; padding: 15px;">优化思想的操作系统</td>
                          <td style="border: 1px solid #ccc; padding: 15px;">个人成长课程，激励积极进取，努力奋斗。</td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ccc; padding: 15px;">幸福人生</td>
                          <td style="border: 1px solid #ccc; padding: 15px;">上一个课程上增加人生规划、子女教育和婚姻关系。</td>
                        </tr>
                        <tr style="background: #f0f0f0;">
                          <td style="border: 1px solid #ccc; padding: 15px;">数字化"转型"</td>
                          <td style="border: 1px solid #ccc; padding: 15px;">讲解如何让人们需要数据、使用数据。</td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ccc; padding: 15px;">努力工作的意义</td>
                          <td style="border: 1px solid #ccc; padding: 15px;">讲解工作的意义以激励研发人员努力工作</td>
                        </tr>
                        <tr style="background: #f0f0f0;">
                          <td style="border: 1px solid #ccc; padding: 15px;">打造学习型组织</td>
                          <td style="border: 1px solid #ccc; padding: 15px;">如何促进员工主动学习，愿意看书、看手册、愿意研究。</td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ccc; padding: 15px;">绩效管理中的人才力提升</td>
                          <td style="border: 1px solid #ccc; padding: 15px;">中高层管理人员如何帮助下属达成绩效。</td>
                        </tr>
                        <tr style="background: #f0f0f0;">
                          <td style="border: 1px solid #ccc; padding: 15px;">技术任职资格和职涯规划</td>
                          <td style="border: 1px solid #ccc; padding: 15px;">如何建立一个真正能激励员工成长意愿的机制。</td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ccc; padding: 15px;">以学员为中心的培训</td>
                          <td style="border: 1px solid #ccc; padding: 15px;">如何开展培训能让学员愿意听、培训有成效。</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </main>
<?php include 'footer.php'; ?>
    </div>
<?php include 'scripts.php'; ?>
    <script>
      const canvas = document.getElementById('wordCloudCanvas');
      const ctx = canvas.getContext('2d');
      
      const words = [
        { text: 'CMMI', size: 52, color: '#ff9900', angle: 0 },
        { text: 'ASPICE', size: 38, color: '#333', angle: 0 },
        { text: 'CMMI-DEV', size: 16, color: '#666', angle: 15 },
        { text: 'GJB5000B', size: 16, color: '#666', angle: -15 },
        { text: 'IPD', size: 22, color: '#555', angle: 25 },
        { text: 'SCAMPI', size: 18, color: '#666', angle: -25 },
        { text: 'CMMI', size: 14, color: '#777', angle: 10 },
        { text: 'CMMI', size: 14, color: '#777', angle: -10 },
        { text: 'ASPICE', size: 16, color: '#666', angle: 20 },
        { text: 'CMMI', size: 16, color: '#666', angle: -20 },
        { text: 'CMMI', size: 14, color: '#777', angle: 30 },
        { text: 'ASPICE', size: 14, color: '#777', angle: -30 },
        { text: 'IPD', size: 18, color: '#555', angle: 35 },
        { text: 'CMMI', size: 18, color: '#555', angle: -35 },
        { text: 'SCAMPI', size: 16, color: '#666', angle: 40 },
        { text: 'GJB5000B', size: 16, color: '#666', angle: -40 },
        { text: 'IATF16949', size: 14, color: '#777', angle: 45 },
        { text: 'CMMI', size: 14, color: '#777', angle: -45 },
        { text: 'ASPICE', size: 12, color: '#888', angle: 50 },
        { text: 'CMMI', size: 12, color: '#888', angle: -50 },
        { text: 'SCRUM', size: 18, color: '#555', angle: 0 },
        { text: 'SCRUM', size: 18, color: '#555', angle: 0 },
        { text: 'IPD', size: 16, color: '#666', angle: 0 },
        { text: 'CMMI', size: 16, color: '#666', angle: 0 }
      ];
      
      const particles = [];
      
      for (let i = 0; i < words.length; i++) {
        const angle = (Math.random() * Math.PI * 2);
        const radius = 50 + Math.random() * 120;
        particles.push({
          ...words[i],
          x: 400 + Math.cos(angle) * radius,
          y: 300 + Math.sin(angle) * radius,
          originalX: 400 + Math.cos(angle) * radius,
          originalY: 300 + Math.sin(angle) * radius,
          radius: radius,
          angle: angle,
          speed: 0.001 + Math.random() * 0.002,
          direction: Math.random() > 0.5 ? 1 : -1
        });
      }
      
      let time = 0;
      
      function draw() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        
        ctx.beginPath();
        ctx.arc(400, 300, 180, 0, 2 * Math.PI);
        ctx.fillStyle = '#f0f0f0';
        ctx.fill();
        
        ctx.beginPath();
        ctx.arc(400, 300, 150, 0, 2 * Math.PI);
        ctx.fillStyle = '#ffcc66';
        ctx.fill();
        
        particles.forEach((particle, index) => {
          ctx.save();
          
          particle.angle += particle.speed * particle.direction;
          particle.x = 400 + Math.cos(particle.angle) * particle.radius;
          particle.y = 300 + Math.sin(particle.angle) * particle.radius;
          
          const floatY = Math.sin(time + index) * 3;
          
          ctx.translate(particle.x, particle.y + floatY);
          ctx.rotate(particle.angle + particle.angle * 0.1);
          
          ctx.font = `bold ${particle.size}px Arial`;
          ctx.fillStyle = particle.color;
          ctx.textAlign = 'center';
          ctx.textBaseline = 'middle';
          ctx.fillText(particle.text, 0, 0);
          
          ctx.restore();
        });
        
        ctx.save();
        ctx.translate(400, 300);
        
        ctx.font = 'bold 52px Arial';
        ctx.fillStyle = '#ff9900';
        ctx.textAlign = 'center';
        ctx.textBaseline = 'middle';
        ctx.fillText('CMMI', 0, -20);
        
        ctx.font = '38px Arial';
        ctx.fillStyle = '#333';
        ctx.fillText('ASPICE', 0, 30);
        
        ctx.restore();
        
        time += 0.02;
        requestAnimationFrame(draw);
      }
      
      draw();
    </script>
  </body>
</html>