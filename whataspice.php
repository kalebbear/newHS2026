<!DOCTYPE html>
<html lang="zh-CN">
<?php 
$pageTitle = '什么是ASPICE';
$pageDescription = 'ASPICE汽车软件过程改进和能力确定介绍，了解汽车电子行业软件过程标准。';
$pageKeywords = '什么是ASPICE,ASPICE介绍,汽车软件过程,汽车电子标准';
?>
<?php include 'head.php'; ?>
  <link rel="stylesheet" href="synspace.com/en/main.css" />
  <body class="wp-singular page-template-default page wp-embed-responsive wp-theme-synspace">
    <div id="app">
<?php include 'header.php'; ?>
      <main id="main" class="main">
<?php
;
$breadcrumbItems = [
    ['title' => '首页', 'url' => 'index.php'],
    ['title' => 'ASPICE', 'url' => 'aspice.php'],
    ['title' => '什么是ASPICE', 'url' => null]
];
include 'pageheader.php';
?>
        <div class="m-ctypes">
          <!-- ASPICE简介 -->
          <section class="m-textimage" data-imgpos="left">
            <div class="container">
              <div class="row">
                <div class="m-textimage__image">
                  <picture class="no-lazyload">
                    <img src="synspace.com/img/s1.webp" alt="ASPICE汽车软件过程改进认证" title="什么是ASPICE" />
                  </picture>
                </div>
                <div class="m-textimage__content">
                  <h2 class="m-textimage__title">
                    <span class="red">ASPICE简介</span>
                  </h2>
                  <div class="m-textimage__text">
                    <p>
                      ASPICE全称是"Automotive Software Process Improvement and Capacity dEtermination"，汽车软件过程改进及能力评定，是汽车行业用于评价软件开发团队的研发能力水平的模型框架。最初由欧洲20多家主要汽车制造商共同制定，于2005年发布，目的是为了指导汽车零部件研发厂商的软件开发流程，从而改善车载软件的质量。
                    </p>
                    <p>
                      多年以来，ASPICE在欧洲汽车行业内被广泛用于研发流程改善及供应商的研发能力评价。随着近年车联网、智能驾驶、新能源汽车的迅速发展，软件在汽车研发中的占比激增，企业对软件质量管理的需求不断增强，ASPICE逐渐被引入到国内，被国内的企业所熟知。另一方面随着TS16949的改版，对企业提出定期审核的要求，也对ASPICE在国内的应用起到的极大的促进作用。
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- ASPICE发展历程 -->
          <section class="m-section" style="background: #f8f9fa;">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <h2 class="m-teaserboxwide__title" style="text-align: center; margin-bottom: 50px;">
                    <span class="red">ASPICE发展历程</span>
                  </h2>
                  
                  <div style="position: relative; max-width: 900px; margin: 0 auto;">
                    <!-- 时间线 -->
                    <div style="position: absolute; left: 50%; transform: translateX(-50%); width: 4px; height: 100%; background: linear-gradient(to bottom, #4a6fa5, #dc3545);"></div>
                    
                    <!-- 1986年 CMM -->
                    <div style="display: flex; margin-bottom: 40px; position: relative;">
                      <div style="flex: 1; text-align: right; padding-right: 40px;">
                        <h3 style="color: #4a6fa5; font-size: 20px; margin-bottom: 10px;">1986年 CMM</h3>
                        <p style="color: #666; font-size: 14px; line-height: 1.8;">
                          ASPICE模型最初是在CMM基础上发展起来的，最初的ASPICE模型几乎与CMM完全一致，评估结果可直接转换、CMMI评估师也可以直接获得ASPICE审核员资质（近年已改变）。CMM全称是Capability Maturity Model，是由卡耐基梅隆大学（CMU)的软件工程研究所（SEI）于1986年在美国防部（DOD）的赞助下开发的一个用于评价企业研发能力水平的模型，被广泛用于软件流程改善和软件研发团队能力评价。
                        </p>
                      </div>
                      <div style="width: 20px; height: 20px; background: #4a6fa5; border-radius: 50%; position: absolute; left: 50%; transform: translateX(-50%); border: 4px solid #fff; box-shadow: 0 2px 8px rgba(0,0,0,0.2);"></div>
                      <div style="flex: 1; padding-left: 40px;"></div>
                    </div>
                    
                    <!-- 1994年 SPICE -->
                    <div style="display: flex; margin-bottom: 40px; position: relative;">
                      <div style="flex: 1; padding-right: 40px;"></div>
                      <div style="width: 20px; height: 20px; background: #4a6fa5; border-radius: 50%; position: absolute; left: 50%; transform: translateX(-50%); border: 4px solid #fff; box-shadow: 0 2px 8px rgba(0,0,0,0.2);"></div>
                      <div style="flex: 1; padding-left: 40px;">
                        <h3 style="color: #4a6fa5; font-size: 20px; margin-bottom: 10px;">1994年 SPICE</h3>
                        <p style="color: #666; font-size: 14px; line-height: 1.8;">
                          1994年国际标准化组织ISO、国际电工委员会IEC、信息技术委员会JTC1联合制定并发布了国际标准ISO/IEC15504，又称SPICE。包括：汽车行业的SPICE、医疗设备行业的SPICE、航天行业的SPICE。
                        </p>
                      </div>
                    </div>
                    
                    <!-- 2005年 ASPICE -->
                    <div style="display: flex; margin-bottom: 40px; position: relative;">
                      <div style="flex: 1; text-align: right; padding-right: 40px;">
                        <h3 style="color: #4a6fa5; font-size: 20px; margin-bottom: 10px;">2005年 ASPICE</h3>
                        <p style="color: #666; font-size: 14px; line-height: 1.8;">
                          2005年汽车行业的SPICE：Automotive SPICE从ISO体系中独立出来，由德国汽车工业联合会（VDA）的质量管理中心（QMC）运营发展，发布了ASPICE第一个版本：ASPICE V2.0。
                        </p>
                      </div>
                      <div style="width: 20px; height: 20px; background: #4a6fa5; border-radius: 50%; position: absolute; left: 50%; transform: translateX(-50%); border: 4px solid #fff; box-shadow: 0 2px 8px rgba(0,0,0,0.2);"></div>
                      <div style="flex: 1; padding-left: 40px;"></div>
                    </div>
                    
                    <!-- 2010年 V3.0 -->
                    <div style="display: flex; margin-bottom: 40px; position: relative;">
                      <div style="flex: 1; padding-right: 40px;"></div>
                      <div style="width: 20px; height: 20px; background: #4a6fa5; border-radius: 50%; position: absolute; left: 50%; transform: translateX(-50%); border: 4px solid #fff; box-shadow: 0 2px 8px rgba(0,0,0,0.2);"></div>
                      <div style="flex: 1; padding-left: 40px;">
                        <h3 style="color: #4a6fa5; font-size: 20px; margin-bottom: 10px;">2010年 V3.0</h3>
                        <p style="color: #666; font-size: 14px; line-height: 1.8;">
                          2010对ASPICE做了一些结构上的修订，包括将PRM和PAM合二为一、将ENG工程过程组拆分为SYS系统工程组和SWE软件工程组、五级名称变化等。
                        </p>
                      </div>
                    </div>
                    
                    <!-- 2018年 V3.1 -->
                    <div style="display: flex; position: relative;">
                      <div style="flex: 1; text-align: right; padding-right: 40px;">
                        <h3 style="color: #dc3545; font-size: 20px; margin-bottom: 10px;">2018年 V3.1</h3>
                        <p style="color: #666; font-size: 14px; line-height: 1.8;">
                          2018年发布了当前最新版本ASPICE V3.1，v3.1在v3.0的基础上做了一些微小改动，并将HIS SCOPE改名为了VDA SCOPE。
                        </p>
                      </div>
                      <div style="width: 20px; height: 20px; background: #dc3545; border-radius: 50%; position: absolute; left: 50%; transform: translateX(-50%); border: 4px solid #fff; box-shadow: 0 2px 8px rgba(0,0,0,0.2);"></div>
                      <div style="flex: 1; padding-left: 40px;"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- ASPICE等级说明 -->
          <section class="m-section">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <h2 class="m-teaserboxwide__title" style="text-align: center; margin-bottom: 40px;">
                    <span class="red">ASPICE能力等级</span>
                  </h2>
                  <p style="text-align: center; color: #666; margin-bottom: 50px; max-width: 800px; margin-left: auto; margin-right: auto;">
                    ASPICE根据企业管理的细致和严谨程度不同，将企业的软件研发能力划分为6个级别，0级为最低级，5级为最高级。级别越高代表研发项目出现意外情况的可能性更低，企业对项目和产品的成功掌控力越强，越有能力按时向客户交付高质量的产品。
                  </p>
                  
                  <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
                    <!-- 0级 -->
                    <div style="background: #fff; border-radius: 12px; padding: 30px; box-shadow: 0 2px 12px rgba(0,0,0,0.06); border: 1px solid #e8e8e8;">
                      <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                        <div style="width: 50px; height: 50px; background: #e9ecef; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; color: #6c757d; font-size: 20px;">0</div>
                        <h3 style="color: #6c757d; font-size: 18px;">0级 - 不完整级</h3>
                      </div>
                      <p style="color: #666; font-size: 14px; line-height: 1.8;">代表一种混乱的状态。</p>
                    </div>
                    
                    <!-- 1级 -->
                    <div style="background: #fff; border-radius: 12px; padding: 30px; box-shadow: 0 2px 12px rgba(0,0,0,0.06); border: 1px solid #e8e8e8;">
                      <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                        <div style="width: 50px; height: 50px; background: #4a6fa5; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; color: #fff; font-size: 20px;">1</div>
                        <h3 style="color: #4a6fa5; font-size: 18px;">1级 - 已执行级</h3>
                      </div>
                      <p style="color: #666; font-size: 14px; line-height: 1.8;">代表企业已经能够完成产品研发相关的工作，但缺乏管理，虽然偶尔能够成功，但项目中存在大量不确定的因素，对项目缺乏掌控能力，无法确保一定能够按时交付高质量的产品。</p>
                    </div>
                    
                    <!-- 2级 -->
                    <div style="background: #fff; border-radius: 12px; padding: 30px; box-shadow: 0 2px 12px rgba(0,0,0,0.06); border: 1px solid #e8e8e8;">
                      <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                        <div style="width: 50px; height: 50px; background: #4a6fa5; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; color: #fff; font-size: 20px;">2</div>
                        <h3 style="color: #4a6fa5; font-size: 18px;">2级 - 已管理级</h3>
                      </div>
                      <p style="color: #666; font-size: 14px; line-height: 1.8;">代表企业不仅能够完成产品研发相关工作还能有提前制定严谨和周全的工作计划，并能有效根据计划实施项目监控和管理，各项目能够有序进行。</p>
                    </div>
                    
                    <!-- 3级 -->
                    <div style="background: #fff; border-radius: 12px; padding: 30px; box-shadow: 0 2px 12px rgba(0,0,0,0.06); border: 1px solid #e8e8e8;">
                      <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                        <div style="width: 50px; height: 50px; background: #4a6fa5; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; color: #fff; font-size: 20px;">3</div>
                        <h3 style="color: #4a6fa5; font-size: 18px;">3级 - 已建立级</h3>
                      </div>
                      <p style="color: #666; font-size: 14px; line-height: 1.8;">代表不仅各项目能够管理得很好，而且能够有效的从历史项目中积累经验和教训，形成公司的知识资产和标准工作流程，用于对今后项目的参考和指导以及公司管理的持续改善。</p>
                    </div>
                    
                    <!-- 4级 -->
                    <div style="background: #fff; border-radius: 12px; padding: 30px; box-shadow: 0 2px 12px rgba(0,0,0,0.06); border: 1px solid #e8e8e8;">
                      <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                        <div style="width: 50px; height: 50px; background: #4a6fa5; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; color: #fff; font-size: 20px;">4</div>
                        <h3 style="color: #4a6fa5; font-size: 18px;">4级 - 可预测级</h3>
                      </div>
                      <p style="color: #666; font-size: 14px; line-height: 1.8;">引入统计学知识和技术，对项目相关各项数据进行统计和分析，并将之运用于未来的项目管理之中，达到对项目结果的预测，并根据预测结果对项目进行实时的调整，确保达成项目目标。</p>
                    </div>
                    
                    <!-- 5级 -->
                    <div style="background: #fff; border-radius: 12px; padding: 30px; box-shadow: 0 2px 12px rgba(0,0,0,0.06); border: 1px solid #e8e8e8;">
                      <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                        <div style="width: 50px; height: 50px; background: #dc3545; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; color: #fff; font-size: 20px;">5</div>
                        <h3 style="color: #dc3545; font-size: 18px;">5级 - 持续优化级</h3>
                      </div>
                      <p style="color: #666; font-size: 14px; line-height: 1.8;">代表企业能够基于商业目标的需要，主动的对过程进行调整，对变革管理有很强的管理能力，能够基于对过程的量化分析设定明确有效的过程改进目标，并能对过程改进结果进行有效的量化监控和分析。</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- ASPICE过程域 -->
          <section class="m-section" style="background: #f8f9fa;">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <h2 class="m-teaserboxwide__title" style="text-align: center; margin-bottom: 40px;">
                    <span class="red">ASPICE过程域</span>
                  </h2>
                  <p style="text-align: center; color: #666; margin-bottom: 50px; max-width: 800px; margin-left: auto; margin-right: auto;">
                    ASPICE将汽车系统研发过程划分为了32个过程，并将这32个过程归类到3大类、8个过程组。其有17个过程被推荐为重点过程，叫VDA Scope（以前的HIS Scope)，多数审核选择对这17个过程进行审核。
                  </p>
                  
                  <div style="background: #fff; border-radius: 12px; padding: 40px; box-shadow: 0 2px 12px rgba(0,0,0,0.06);">
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                      <div>
                        <h4 style="color: #4a6fa5; font-size: 16px; margin-bottom: 15px; padding-bottom: 10px; border-bottom: 2px solid #4a6fa5;">主要生命周期过程</h4>
                        <ul style="list-style: none; padding: 0; margin: 0;">
                          <li style="padding: 8px 0; color: #666; border-bottom: 1px solid #f0f0f0;">ACQ - 获取过程组</li>
                          <li style="padding: 8px 0; color: #666; border-bottom: 1px solid #f0f0f0;">SYS - 系统工程过程组</li>
                          <li style="padding: 8px 0; color: #666;">SWE - 软件工程过程组</li>
                        </ul>
                      </div>
                      <div>
                        <h4 style="color: #4a6fa5; font-size: 16px; margin-bottom: 15px; padding-bottom: 10px; border-bottom: 2px solid #4a6fa5;">支持生命周期过程</h4>
                        <ul style="list-style: none; padding: 0; margin: 0;">
                          <li style="padding: 8px 0; color: #666; border-bottom: 1px solid #f0f0f0;">SUP - 支持过程组</li>
                          <li style="padding: 8px 0; color: #666;">REU - 复用过程组</li>
                        </ul>
                      </div>
                      <div>
                        <h4 style="color: #dc3545; font-size: 16px; margin-bottom: 15px; padding-bottom: 10px; border-bottom: 2px solid #dc3545;">组织生命周期过程</h4>
                        <ul style="list-style: none; padding: 0; margin: 0;">
                          <li style="padding: 8px 0; color: #666; border-bottom: 1px solid #f0f0f0;">MAN - 管理过程组</li>
                          <li style="padding: 8px 0; color: #666; border-bottom: 1px solid #f0f0f0;">PIM - 过程改进过程组</li>
                          <li style="color: #666; padding: 8px 0;">RIN - 资源与基础设施过程组</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- CTA -->
          <section class="m-cta">
            <div class="container">
              <div class="row">
                <div class="m-cta__inner">
                  <div class="m-cta__content">
                    <h2 class="m-cta__title">了解更多ASPICE认证详情</h2>
                    <p class="m-cta__text">联系我们的专业顾问，获取定制化的ASPICE认证解决方案</p>
                  </div>
                  <div class="m-cta__button">
                    <a href="contact.php" class="m-button__primary">立即咨询</a>
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
  </body>
</html>
