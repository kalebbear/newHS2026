<!DOCTYPE html>
<html lang="zh-CN">
<?php 
$pageTitle = '什么是ASPICE认证';
$pageDescription = 'ASPICE认证详细介绍，包括认证等级、评估流程、认证价值和适用范围。';
$pageKeywords = 'ASPICE认证,ASPICE等级,认证流程,汽车软件认证';
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
    ['title' => '什么是ASPICE认证', 'url' => null]
];
include 'pageheader.php';
?>
        <div class="m-ctypes">
          <!-- ASPICE认证简介 -->
          <section class="m-textimage" data-imgpos="left">
            <div class="container">
              <div class="row">
                <div class="m-textimage__image">
                  <picture class="no-lazyload">
                    <img src="synspace.com/img/s1.webp" alt="ASPICE认证评估流程" title="什么是ASPICE认证" />
                  </picture>
                </div>
                <div class="m-textimage__content">
                  <h2 class="m-textimage__title">
                    <span class="red">ASPICE认证简介</span>
                  </h2>
                  <div class="m-textimage__text">
                    <p>
                      虽然任何人都可以使用ASPICE的PAM（过程评估模型）基于PRM（过程参考模型）来对企业的研发管理流程进行评估。但为了区分评估结果的可信程度，只有经过特定授权的人遵照特定规则所开展评估，其评估结果才能被采信。
                    </p>
                    <p>
                      通常所说的ASPICE认证指的是由Competent Assessor按照ASPICE要求开展的评估，最终对企业的研发能力给出客观的评价结果。并且为了保证审核的客观性，要求Competent Assessor必须独立于被评估公司以外，并以寻找证据的方式进行审核。
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- 评估等级分类 -->
          <section class="m-section" style="background: #f8f9fa;">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <h2 class="m-teaserboxwide__title" style="text-align: center; margin-bottom: 50px;">
                    <span class="red">评估等级分类</span>
                  </h2>
                  <p style="text-align: center; color: #666; margin-bottom: 50px; max-width: 800px; margin-left: auto; margin-right: auto;">
                    一般有如下Class1，Class2，Class3三类评估，不同等级的评估适用于不同的场景和目的。
                  </p>
                  
                  <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
                    <!-- Class 3 -->
                    <div style="background: #fff; border-radius: 12px; padding: 30px; box-shadow: 0 2px 12px rgba(0,0,0,0.06); border: 1px solid #e8e8e8;">
                      <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                        <div style="width: 60px; height: 60px; background: #e9ecef; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; color: #6c757d; font-size: 24px;">3</div>
                        <h3 style="color: #6c757d; font-size: 20px;">Class 3</h3>
                      </div>
                      <p style="color: #666; font-size: 14px; line-height: 1.8;">
                        一般用于内部分析，以启动一次改进。评估结果仅供企业内部参考，不对外发布证书。
                      </p>
                    </div>
                    
                    <!-- Class 2 -->
                    <div style="background: #fff; border-radius: 12px; padding: 30px; box-shadow: 0 2px 12px rgba(0,0,0,0.06); border: 1px solid #e8e8e8;">
                      <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                        <div style="width: 60px; height: 60px; background: #4a6fa5; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; color: #fff; font-size: 24px;">2</div>
                        <h3 style="color: #4a6fa5; font-size: 20px;">Class 2</h3>
                      </div>
                      <p style="color: #666; font-size: 14px; line-height: 1.8;">
                        一般用于阶段性的审查，以便发现问题进行改善。适用于企业内部流程改进和阶段性评估。
                      </p>
                    </div>
                    
                    <!-- Class 1 -->
                    <div style="background: linear-gradient(135deg, #4a6fa5 0%, #4a6fa5 100%); border-radius: 12px; padding: 30px; box-shadow: 0 2px 12px rgba(0,0,0,0.1); color: #fff;">
                      <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                        <div style="width: 60px; height: 60px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; color: #fff; font-size: 24px;">1</div>
                        <h3 style="color: #fff; font-size: 20px;">Class 1</h3>
                      </div>
                      <p style="color: rgba(255,255,255,0.9); font-size: 14px; line-height: 1.8;">
                        为最严格和正式的评估方式，只有Class 1评估可以发放证书。适用于正式的ASPICE认证评估。
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- 审核员资质 -->
          <section class="m-section">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <h2 class="m-teaserboxwide__title" style="text-align: center; margin-bottom: 50px;">
                    <span class="red">审核员资质等级</span>
                  </h2>
                  <p style="text-align: center; color: #666; margin-bottom: 50px; max-width: 800px; margin-left: auto; margin-right: auto;">
                    目前审核员相关资质由INTACS（International Assessor Certification Scheme）进行管理。INTACS是国际审核员认证计划，负责ASPICE审核员的资质认证和管理。
                  </p>
                  
                  <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 25px;">
                    <!-- Provisional Assessor -->
                    <div style="background: #fff; border-radius: 12px; padding: 30px; box-shadow: 0 2px 12px rgba(0,0,0,0.06); border: 1px solid #e8e8e8;">
                      <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                        <div style="width: 50px; height: 50px; background: #4a6fa5; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        </div>
                        <h3 style="color: #4a6fa5; font-size: 18px;">Provisional Assessor</h3>
                      </div>
                      <p style="color: #666; font-size: 14px; line-height: 1.8; margin-bottom: 15px;">
                        <strong>初级审核员</strong>
                      </p>
                      <p style="color: #666; font-size: 14px; line-height: 1.8;">
                        指通过官方基础课程掌握ASPICE模型，可以作为评估小组成员参与对企业的ASPICE审核的人员，不能直接签发证书。但ASPICE审核必须有数位Provisional Assessor成员参加，可以是被评估公司的外部成员也可以是被评估公司的内部成员。
                      </p>
                    </div>
                    
                    <!-- Competent Assessor -->
                    <div style="background: linear-gradient(135deg, #4a6fa5 0%, #3d5d8a 100%); border-radius: 12px; padding: 30px; box-shadow: 0 2px 12px rgba(0,0,0,0.1); color: #fff;">
                      <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                        <div style="width: 50px; height: 50px; background: rgba(255,255,255,0.2); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        </div>
                        <h3 style="color: #fff; font-size: 18px;">Competent Assessor</h3>
                      </div>
                      <p style="color: rgba(255,255,255,0.9); font-size: 14px; line-height: 1.8; margin-bottom: 15px;">
                        <strong>高级审核员</strong>
                      </p>
                      <p style="color: rgba(255,255,255,0.9); font-size: 14px; line-height: 1.8;">
                        指通过官方的评估方法课程培训的审核员，可以作为评估小组长组织开展一场评估，可以签发证书。因为ASPICE在欧洲发展的早，在欧洲Competent Assessor数量最多，有数十位，而亚洲地区因为ASPICE发展较晚，目前在日本、韩国和中国分别只有为数不多的几位。
                      </p>
                    </div>
                    
                    <!-- Principal Assessor -->
                    <div style="background: linear-gradient(135deg, #4a6fa5 0%, #4a6fa5 100%); border-radius: 12px; padding: 30px; box-shadow: 0 2px 12px rgba(0,0,0,0.1); color: #fff;">
                      <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                        <div style="width: 50px; height: 50px; background: rgba(255,255,255,0.2); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        </div>
                        <h3 style="color: #fff; font-size: 18px;">Principal Assessor</h3>
                      </div>
                      <p style="color: rgba(255,255,255,0.9); font-size: 14px; line-height: 1.8; margin-bottom: 15px;">
                        <strong>首席审核员</strong>
                      </p>
                      <p style="color: rgba(255,255,255,0.9); font-size: 14px; line-height: 1.8;">
                        指对ASPICE发展贡献较多的审核员，可以培养其他审核员（包括Competent Assessor和Provisional Assessor），目前全球只有几位。
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- 评估证据 -->
          <section class="m-section" style="background: #f8f9fa;">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <h2 class="m-teaserboxwide__title" style="text-align: center; margin-bottom: 50px;">
                    <span class="red">评估证据</span>
                  </h2>
                  <p style="text-align: center; color: #666; margin-bottom: 50px; max-width: 800px; margin-left: auto; margin-right: auto;">
                    所有的评估结果依赖于"人证"和"物证"。评估小组根据对证据的审查，对企业实施ASPICE各活动的情况进行打分。
                  </p>
                  
                  <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px; max-width: 800px; margin: 0 auto;">
                    <!-- 物证 -->
                    <div style="background: #fff; border-radius: 12px; padding: 35px; box-shadow: 0 2px 12px rgba(0,0,0,0.06); border: 1px solid #e8e8e8; text-align: center;">
                      <div style="width: 70px; height: 70px; background: #4a6fa5; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px;">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                      </div>
                      <h3 style="color: #4a6fa5; font-size: 20px; margin-bottom: 15px;">物证</h3>
                      <p style="color: #666; font-size: 14px; line-height: 1.8;">
                        指项目中的相关文件记录能够证明企业实施了ASPICE相关活动
                      </p>
                    </div>
                    
                    <!-- 人证 -->
                    <div style="background: #fff; border-radius: 12px; padding: 35px; box-shadow: 0 2px 12px rgba(0,0,0,0.06); border: 1px solid #e8e8e8; text-align: center;">
                      <div style="width: 70px; height: 70px; background: #4a6fa5; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px;">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                      </div>
                      <h3 style="color: #4a6fa5; font-size: 20px; margin-bottom: 15px;">人证</h3>
                      <p style="color: #666; font-size: 14px; line-height: 1.8;">
                        指相关活动执行人在评估期间的访谈时口头证实其执行了ASPICE相关活动
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- 评分尺度 -->
          <section class="m-section">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <h2 class="m-teaserboxwide__title" style="text-align: center; margin-bottom: 50px;">
                    <span class="red">评分结果尺度</span>
                  </h2>
                  <p style="text-align: center; color: #666; margin-bottom: 50px; max-width: 800px; margin-left: auto; margin-right: auto;">
                    ASPICE中定义了四个打分结果尺度，用于评估企业对各项活动的实施情况。
                  </p>
                  
                  <div style="background: #fff; border-radius: 12px; padding: 40px; box-shadow: 0 2px 12px rgba(0,0,0,0.06);">
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
                      <div style="text-align: center; padding: 25px; background: #f8f9fa; border-radius: 8px;">
                        <div style="font-size: 36px; font-weight: bold; color: #4a6fa5; margin-bottom: 10px;">N</div>
                        <h4 style="color: #333; font-size: 16px; margin-bottom: 8px;">Not achieved</h4>
                        <p style="color: #666; font-size: 13px;">未达成</p>
                      </div>
                      <div style="text-align: center; padding: 25px; background: #f8f9fa; border-radius: 8px;">
                        <div style="font-size: 36px; font-weight: bold; color: #ffc107; margin-bottom: 10px;">P</div>
                        <h4 style="color: #333; font-size: 16px; margin-bottom: 8px;">Partially achieved</h4>
                        <p style="color: #666; font-size: 13px;">部分达成</p>
                      </div>
                      <div style="text-align: center; padding: 25px; background: #f8f9fa; border-radius: 8px;">
                        <div style="font-size: 36px; font-weight: bold; color: #4a6fa5; margin-bottom: 10px;">L</div>
                        <h4 style="color: #333; font-size: 16px; margin-bottom: 8px;">Largely achieved</h4>
                        <p style="color: #666; font-size: 13px;">大部分达成</p>
                      </div>
                      <div style="text-align: center; padding: 25px; background: #f8f9fa; border-radius: 8px;">
                        <div style="font-size: 36px; font-weight: bold; color: #28a745; margin-bottom: 10px;">F</div>
                        <h4 style="color: #333; font-size: 16px; margin-bottom: 8px;">Fully achieved</h4>
                        <p style="color: #666; font-size: 13px;">完全达成</p>
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
                    <h2 class="m-cta__title">开始您的ASPICE认证之旅</h2>
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
