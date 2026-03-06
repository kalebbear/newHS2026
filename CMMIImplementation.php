<!DOCTYPE html>
<html lang="zh-CN">
<?php 
$pageTitle = 'CMMI实施';
$pageDescription = '华赛咨询CMMI实施方法论和步骤，从差距分析到评估通过的全流程服务。';
$pageKeywords = 'CMMI实施,CMMI方法论,差距分析,评估准备';
?>
<?php include 'head.php'; ?>
  <link rel="stylesheet" href="synspace.com/en/main.css" />
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <body
    class="wp-singular page-template-default page wp-embed-responsive wp-theme-synspace"
  >
    <div id="app">
<?php include 'header.php'; ?>
      <main id="main" class="main">
<?php
$breadcrumbItems = [
    ['title' => '首页', 'url' => 'index.php'],
    ['title' => 'CMMI', 'url' => 'consulting.html'],
    ['title' => 'CMMI实施', 'url' => null]
];
include 'pageheader.php';
?>
        <div class="m-ctypes">
          <section class="m-textimage" data-imgpos="left">
            <div class="container">
              <div class="row">
                <div class="m-textimage__image">
                  <picture class="no-lazyload">
                    <img
                      src="synspace.com/img/s1.webp"
                      alt="CMMI实施"
                      title="CMMI实施" />
                  </picture>
                </div>
                <div class="m-textimage__content">
                  <h2 class="m-textimage__title">
                    <span class="red">什么是CMMI?</span>
                  </h2>
                  <div class="m-textimage__text">
                    <p>
                      CMMI（Capability Maturity Model Integration）即能力成熟度模型集成，其前身为CMM，原本是当年美国军方为了评估自己的软件产品供应商的过程质量水平，而委托美国卡内基梅隆大学软件工程学院（SEI）开发的一套过程评估体系，后来又被推广到全世界，成为全球软件企业重要的过程改进方法之一，后因其衍生品的派系林立（如：SW-CMM、SE-CMM、IPT-CMM等等），SEI决定在SW-CMM、SE-CMM的基础上，加入委外采购、IPPD等相关内容，并融合ISO9000部分理念，形成了今天我们看到的CMMI，这也就是CMMI中的"I"的由来。
                    </p>
                    <p style="margin-top: 20px;">
                      <a href="cmmijs.php" style="color: #4a6fa5; text-decoration: none; font-weight: 500; display: inline-flex; align-items: center; gap: 8px;">
                        查看更多
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                      </a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="m-teaserbox">
            <div class="container">
              <div class="row">
                <div class="m-teaserbox__inner">
                  <h2 class="m-teaserbox__title">
                    <span class="red">实施CMMI的好处</span>
                  </h2>
                  <ul class="m-teaserbox__items">
                    <li class="m-teaserbox__item">
                      <div class="m-teaserbox__icon" data-icon="rocket"></div>
                      <div class="m-teaserbox__content">
                        <h4 class="m-teaserbox__headline">提升研发效率</h4>
                        <div class="m-teaserboxwide__text">
                          规范研发流程，减少重复工作和低效环节，提高团队协作效率，加速产品开发周期。
                        </div>
                      </div>
                    </li>
                    <li class="m-teaserbox__item">
                      <div class="m-teaserbox__icon" data-icon="coins"></div>
                      <div class="m-teaserbox__content">
                        <h4 class="m-teaserbox__headline">降低研发成本</h4>
                        <div class="m-teaserboxwide__text">
                          通过优化流程和资源分配，减少浪费和返工，降低研发过程中的不必要开支。
                        </div>
                      </div>
                    </li>
                    <li class="m-teaserbox__item">
                      <div class="m-teaserbox__icon" data-icon="shield-check"></div>
                      <div class="m-teaserbox__content">
                        <h4 class="m-teaserbox__headline">提升产品质量</h4>
                        <div class="m-teaserboxwide__text">
                          引入质量控制机制，减少缺陷和错误，提高产品稳定性和可靠性。
                        </div>
                      </div>
                    </li>
                    <li class="m-teaserbox__item">
                      <div class="m-teaserbox__icon" data-icon="clock"></div>
                      <div class="m-teaserbox__content">
                        <h4 class="m-teaserbox__headline">按时交付</h4>
                        <div class="m-teaserboxwide__text">
                          明确流程和时间节点，增强项目进度把控能力，确保项目按时交付。
                        </div>
                      </div>
                    </li>
                    <li class="m-teaserbox__item">
                      <div class="m-teaserbox__icon" data-icon="users"></div>
                      <div class="m-teaserbox__content">
                        <h4 class="m-teaserbox__headline">提升客户满意度</h4>
                        <div class="m-teaserboxwide__text">
                          高质量的产品和按时交付，增强客户信任，提升客户满意度和忠诚度。
                        </div>
                      </div>
                    </li>
                    <li class="m-teaserbox__item">
                      <div class="m-teaserbox__icon" data-icon="chart-line"></div>
                      <div class="m-teaserbox__content">
                        <h4 class="m-teaserbox__headline">提升项目的可控性</h4>
                        <div class="m-teaserboxwide__text">
                          量化指标和标准化流程，让项目进度和风险可控，增强管理透明度。
                        </div>
                      </div>
                    </li>
                    <li class="m-teaserbox__item">
                      <div class="m-teaserbox__icon" data-icon="table-cells"></div>
                      <div class="m-teaserbox__content">
                        <h4 class="m-teaserboxwide__headline">规范化管理</h4>
                        <div class="m-teaserboxwide__text">
                          建立标准化流程，提升企业管理水平，减少因人为因素导致的混乱。
                        </div>
                      </div>
                    </li>
                    <li class="m-teaserbox__item">
                      <div class="m-teaserbox__icon" data-icon="trophy"></div>
                      <div class="m-teaserbox__content">
                        <h4 class="m-teaserbox__headline">提升竞争力</h4>
                        <div class="m-teaserboxwide__text">
                          获得国际认可的CMMI认证，提升企业形象，增强市场竞争力。
                        </div>
                      </div>
                    </li>
                    <li class="m-teaserbox__item">
                      <div class="m-teaserbox__icon" data-icon="book-open"></div>
                      <div class="m-teaserbox__content">
                        <h4 class="m-teaserbox__headline">学习和成长</h4>
                        <div class="m-teaserboxwide__text">
                          员工在实施CMMI过程中学习新知识，提升专业技能，促进个人和团队成长。
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
          <section class="m-section">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <h2 class="m-teaserboxwide__title" style="text-align: center; margin-bottom: 50px;">
                    <span class="red">CMMI实施步骤</span>
                  </h2>
                  
                  <style>
                    .steps-container {
                      max-width: 900px;
                      margin: 0 auto;
                      position: relative;
                    }
                    .steps-container::before {
                      content: '';
                      position: absolute;
                      left: 40px;
                      top: 0;
                      bottom: 0;
                      width: 4px;
                      background: linear-gradient(to bottom, #4a6fa5, #6b8cbc);
                      border-radius: 2px;
                    }
                    .step-item {
                      display: flex;
                      align-items: flex-start;
                      margin-bottom: 40px;
                      position: relative;
                    }
                    .step-item:last-child {
                      margin-bottom: 0;
                    }
                    .step-number {
                      width: 80px;
                      height: 80px;
                      background: linear-gradient(135deg, #4a6fa5, #6b8cbc);
                      border-radius: 50%;
                      display: flex;
                      align-items: center;
                      justify-content: center;
                      color: #fff;
                      font-size: 28px;
                      font-weight: bold;
                      flex-shrink: 0;
                      box-shadow: 0 4px 15px rgba(74, 111, 165, 0.3);
                      position: relative;
                      z-index: 1;
                      border: 4px solid #fff;
                    }
                    .step-content {
                      margin-left: 30px;
                      flex: 1;
                      background: #fff;
                      padding: 25px 30px;
                      border-radius: 12px;
                      box-shadow: 0 2px 10px rgba(0,0,0,0.08);
                      border: 1px solid #e8e8e8;
                      transition: all 0.3s ease;
                    }
                    .step-content:hover {
                      box-shadow: 0 8px 25px rgba(0,0,0,0.12);
                      transform: translateX(5px);
                    }
                    .step-content h4 {
                      margin: 0 0 12px 0;
                      font-size: 18px;
                      font-weight: 600;
                      color: #333;
                    }
                    .step-content p {
                      margin: 0;
                      font-size: 14px;
                      line-height: 1.8;
                      color: #666;
                    }
                    .step-tags {
                      display: flex;
                      flex-wrap: wrap;
                      gap: 8px;
                      margin-top: 15px;
                    }
                    .step-tag {
                      background: #f0f4f8;
                      color: #4a6fa5;
                      padding: 4px 12px;
                      border-radius: 20px;
                      font-size: 12px;
                      font-weight: 500;
                    }
                    @media (max-width: 768px) {
                      .steps-container::before {
                        left: 25px;
                      }
                      .step-number {
                        width: 50px;
                        height: 50px;
                        font-size: 20px;
                        border-width: 3px;
                      }
                      .step-content {
                        margin-left: 20px;
                        padding: 20px;
                      }
                    }
                  </style>
                  
                  <div class="steps-container">
                    <div class="step-item">
                      <div class="step-number">1</div>
                      <div class="step-content">
                        <h4>差距分析</h4>
                        <p>全面评估企业当前研发管理水平与CMMI标准的差距，识别关键改进点，设计总体改进方案。</p>
                        <div class="step-tags">
                          <span class="step-tag">现状诊断</span>
                          <span class="step-tag">差距识别</span>
                          <span class="step-tag">方案设计</span>
                        </div>
                      </div>
                    </div>
                    
                    <div class="step-item">
                      <div class="step-number">2</div>
                      <div class="step-content">
                        <h4>改进计划</h4>
                        <p>制定详细的改进实施计划，明确各阶段目标和时间节点，组建跨部门的流程改进团队。</p>
                        <div class="step-tags">
                          <span class="step-tag">计划制定</span>
                          <span class="step-tag">团队组建</span>
                          <span class="step-tag">资源分配</span>
                        </div>
                      </div>
                    </div>
                    
                    <div class="step-item">
                      <div class="step-number">3</div>
                      <div class="step-content">
                        <h4>基础培训</h4>
                        <p>开展CMMI模型知识培训，让团队成员理解模型要求，掌握过程改进的方法和工具。</p>
                        <div class="step-tags">
                          <span class="step-tag">模型培训</span>
                          <span class="step-tag">方法培训</span>
                          <span class="step-tag">工具培训</span>
                        </div>
                      </div>
                    </div>
                    
                    <div class="step-item">
                      <div class="step-number">4</div>
                      <div class="step-content">
                        <h4>过程定义</h4>
                        <p>基于CMMI标准和企业实际，研讨并定义符合组织特点的研发过程标准和规范。</p>
                        <div class="step-tags">
                          <span class="step-tag">过程研讨</span>
                          <span class="step-tag">标准制定</span>
                          <span class="step-tag">文档编制</span>
                        </div>
                      </div>
                    </div>
                    
                    <div class="step-item">
                      <div class="step-number">5</div>
                      <div class="step-content">
                        <h4>过程实施</h4>
                        <p>选择试点项目进行过程试运行，验证过程有效性，收集反馈并优化完善后全面推广。</p>
                        <div class="step-tags">
                          <span class="step-tag">试点运行</span>
                          <span class="step-tag">过程优化</span>
                          <span class="step-tag">全面推广</span>
                        </div>
                      </div>
                    </div>
                    
                    <div class="step-item">
                      <div class="step-number">6</div>
                      <div class="step-content">
                        <h4>效果验收</h4>
                        <p>总结实施效果，进行内部预评估，查漏补缺，准备正式评估认证所需的证据和材料。</p>
                        <div class="step-tags">
                          <span class="step-tag">效果总结</span>
                          <span class="step-tag">内部评估</span>
                          <span class="step-tag">正式认证</span>
                        </div>
                      </div>
                    </div>
                    
                    <div class="step-item">
                      <div class="step-number">7</div>
                      <div class="step-content">
                        <h4>持续改进</h4>
                        <p>解决实施过程中遗留的问题，建立持续改进机制，定期跟踪改进效果，确保过程持续优化。</p>
                        <div class="step-tags">
                          <span class="step-tag">问题解决</span>
                          <span class="step-tag">效果跟踪</span>
                          <span class="step-tag">持续优化</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          
          <!-- <section class="m-teaserboxwide">
            <div class="container">
              <div class="row">
                <div class="m-teaserboxwide__inner">
                  <h2 class="m-teaserboxwide__title">
                    <span class="red">行业解决方案</span>
                  </h2>
                  <ul class="m-teaserboxwide__items">
                    <li class="m-teaserboxwide__item">
                      <a
                        href="#"
                        class="m-teaserboxwide__link"
                        target="">
                        <div class="m-teaserboxwide__content">
                          <div
                            class="m-teaserboxwide__icon"
                            data-icon="car"></div>
                          <h4 class="m-teaserboxwide__headline">
                            汽车行业
                          </h4>
                          <h5 class="m-teaserboxwide__subline">
                            解决方案
                          </h5>
                          <div class="m-teaserboxwide__text">
                            研发管理提升之道，过程改进指导模型、研发管理国际标准
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="m-teaserboxwide__item">
                      <a
                        href="#"
                        class="m-teaserboxwide__link"
                        target="">
                        <div class="m-teaserboxwide__content">
                          <div
                            class="m-teaserboxwide__icon"
                            data-icon="coins"></div>
                          <h4 class="m-teaserboxwide__headline">
                            金融行业
                          </h4>
                          <h5 class="m-teaserboxwide__subline">
                            解决方案
                          </h5>
                          <div class="m-teaserboxwide__text">
                            研发管理提升之道，过程改进指导模型、研发管理国际标准
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="m-teaserboxwide__item">
                      <a
                        href="#"
                        class="m-teaserboxwide__link"
                        target="">
                        <div class="m-teaserboxwide__content">
                          <div
                            class="m-teaserboxwide__icon"
                            data-icon="heart-pulse"></div>
                          <h4 class="m-teaserboxwide__headline">
                            医疗行业
                          </h4>
                          <h5 class="m-teaserboxwide__subline">
                            解决方案
                          </h5>
                          <div class="m-teaserboxwide__text">
                            研发管理提升之道，过程改进指导模型、研发管理国际标准
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="m-teaserboxwide__item">
                      <a
                        href="#"
                        class="m-teaserboxwide__link"
                        target="">
                        <div class="m-teaserboxwide__content">
                          <div
                            class="m-teaserboxwide__icon"
                            data-icon="bolt"></div>
                          <h4 class="m-teaserboxwide__headline">
                            电力行业
                          </h4>
                          <h5 class="m-teaserboxwide__subline">
                            解决方案
                          </h5>
                          <div class="m-teaserboxwide__text">
                            研发管理提升之道，过程改进指导模型、研发管理国际标准
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="m-teaserboxwide__item">
                      <a
                        href="#"
                        class="m-teaserboxwide__link"
                        target="">
                        <div class="m-teaserboxwide__content">
                          <div
                            class="m-teaserboxwide__icon"
                            data-icon="globe"></div>
                          <h4 class="m-teaserboxwide__headline">
                            互联网行业
                          </h4>
                          <h5 class="m-teaserboxwide__subline">
                            解决方案
                          </h5>
                          <div class="m-teaserboxwide__text">
                            研发管理提升之道，过程改进指导模型、研发管理国际标准
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="m-teaserboxwide__item">
                      <a
                        href="#"
                        class="m-teaserboxwide__link"
                        target="">
                        <div class="m-teaserboxwide__content">
                          <div
                            class="m-teaserboxwide__icon"
                            data-icon="robot"></div>
                          <h4 class="m-teaserboxwide__headline">
                            人工智能
                          </h4>
                          <h5 class="m-teaserboxwide__subline">
                            解决方案
                          </h5>
                          <div class="m-teaserboxwide__text">
                            研发管理提升之道，过程改进指导模型、研发管理国际标准
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section> -->
          
          <section class="m-teaserboxwide">
            <div class="container">
              <div class="row">
                <div class="m-teaserboxwide__inner">
                  <h2 class="m-teaserboxwide__title">
                    <span class="red">精选行业应用案例</span>
                  </h2>
                  <p style="text-align: center; color: #666; margin-bottom: 40px;">专业的软件定制能力，深度匹配企业需求</p>
                  
                  <!-- Owl Carousel 轮播组件 -->
                  <div class="owl-carousel cases-carousel" style="max-width: 1200px; margin: 0 auto; position: relative;">
                    <div class="case-card">
                      <div class="case-card-image">
                        <img src="synspace.com/img/banners/bb1.jpg" alt="医疗信息化平台案例">
                      </div>
                      <div class="case-card-content">
                        <h4>华赛助力某省级医疗信息化平台通过CMMI 3级认证</h4>
                        <p>华赛为某省级医疗信息化平台提供了全面的CMMI 3级认证咨询与实施服务。在项目中，华赛团队结合医疗行业的特殊需求，对平台的软件开发流程进行了系统优化，重点改进了需求管理、项目策划和质量保证等关键环节。通过引入标准化流程和工具，平台的开发效率显著提升，软件质量得到保障。</p>
                      </div>
                    </div>
                    <div class="case-card">
                      <div class="case-card-image">
                        <img src="synspace.com/img/banners/bb2.jpg" alt="金融科技公司案例">
                      </div>
                      <div class="case-card-content">
                        <h4>华赛助力某金融科技公司通过CMMI 5级认证</h4>
                        <p>华赛为某金融科技公司提供了CMMI 5级认证的全程咨询与实施服务。在项目实施过程中，华赛团队与客户紧密协作，针对金融行业的合规要求和安全标准，建立了完善的量化过程管理体系，实现了研发过程的精细化管理，大幅提升了产品交付质量和客户满意度。</p>
                      </div>
                    </div>
                    <div class="case-card">
                      <div class="case-card-image">
                        <img src="synspace.com/img/banners/bb3.jpg" alt="汽车制造企业案例">
                      </div>
                      <div class="case-card-content">
                        <h4>华赛助力某汽车制造企业通过CMMI 4级认证</h4>
                        <p>华赛为某大型汽车制造企业提供了CMMI 4级认证咨询服务，帮助企业建立了量化的过程管理体系。通过实施CMMI，企业实现了研发过程的可预测性和可控性，有效降低了产品开发周期和成本，提升了车载软件系统的质量和可靠性。</p>
                      </div>
                    </div>
                    <div class="case-card">
                      <div class="case-card-image">
                        <img src="synspace.com/img/banners/bb5.jpg" alt="互联网教育平台案例">
                      </div>
                      <div class="case-card-content">
                        <h4>华赛助力某互联网教育平台通过CMMI 3级认证</h4>
                        <p>华赛为某互联网教育平台提供了CMMI 3级认证的全程咨询与实施服务。针对在线教育产品迭代快、需求变化频繁的特点，华赛团队帮助客户建立了灵活高效的研发流程，实现了快速响应市场需求的同时保证软件质量，支撑了业务的快速发展。</p>
                      </div>
                    </div>
                    <div class="case-card">
                      <div class="case-card-image">
                        <img src="synspace.com/img/banners/bb1.jpg" alt="通讯设备制造商案例">
                      </div>
                      <div class="case-card-content">
                        <h4>华赛助力某通讯企业通过CMMI 5级认证</h4>
                        <p>华赛为某大型通讯设备制造商提供了CMMI 5级认证的全程咨询服务。通过深入分析企业研发管理现状，华赛团队帮助客户建立了组织级的过程性能基线和模型，实现了研发过程的持续优化和创新，为企业的全球化发展奠定了坚实基础。</p>
                      </div>
                    </div>
                    <div class="case-card">
                      <div class="case-card-image">
                        <img src="synspace.com/img/banners/bb2.jpg" alt="电商平台案例">
                      </div>
                      <div class="case-card-content">
                        <h4>华赛助力某电商平台通过CMMI 3级认证</h4>
                        <p>华赛为某知名电商平台提供了CMMI 3级认证咨询，优化了平台的需求管理流程。在大促活动期间，平台的系统稳定性得到显著提升，有效支撑了海量用户并发访问，为业务的高速增长提供了有力保障。</p>
                      </div>
                    </div>
                  </div>
                  
                  <style>
                    .cases-carousel .owl-stage {
                      display: flex;
                      align-items: stretch;
                    }
                    .cases-carousel .owl-item {
                      display: flex;
                    }
                    .cases-carousel .case-card {
                      display: flex;
                      flex-direction: column;
                      width: 100%;
                      background: #fff;
                      border: 1px solid #e9ecef;
                      overflow: hidden;
                      margin: 0 10px;
                    }
                    .cases-carousel .case-card-image {
                      height: 200px;
                      overflow: hidden;
                      flex-shrink: 0;
                    }
                    .cases-carousel .case-card-image img {
                      width: 100%;
                      height: 100%;
                      object-fit: cover;
                    }
                    .cases-carousel .case-card-content {
                      padding: 20px;
                      flex: 1;
                      display: flex;
                      flex-direction: column;
                    }
                    .cases-carousel .case-card h4 {
                      font-size: 16px;
                      color: #333;
                      margin-bottom: 10px;
                      font-weight: bold;
                      line-height: 1.4;
                    }
                    .cases-carousel .case-card p {
                      font-size: 13px;
                      line-height: 1.6;
                      color: #666;
                      margin: 0;
                    }
                    .cases-carousel .owl-nav button.owl-prev,
                    .cases-carousel .owl-nav button.owl-next {
                      position: absolute;
                      top: 50%;
                      transform: translateY(-50%);
                      width: 40px;
                      height: 40px;
                      border-radius: 50%;
                      background: #fff !important;
                      border: 1px solid #ddd !important;
                      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
                      color: #666 !important;
                      font-size: 20px !important;
                      display: flex;
                      align-items: center;
                      justify-content: center;
                    }
                    .cases-carousel .owl-nav button.owl-prev {
                      left: -20px;
                    }
                    .cases-carousel .owl-nav button.owl-next {
                      right: -20px;
                    }
                    .cases-carousel .owl-nav button.owl-prev:hover,
                    .cases-carousel .owl-nav button.owl-next:hover {
                      background: #4a6fa5 !important;
                      color: #fff !important;
                      border-color: #4a6fa5 !important;
                    }
                    .cases-carousel .owl-dots {
                      margin-top: 20px;
                    }
                    .cases-carousel .owl-dots .owl-dot span {
                      width: 8px;
                      height: 8px;
                      margin: 0 4px;
                      background: #ddd;
                    }
                    .cases-carousel .owl-dots .owl-dot.active span {
                      background: #4a6fa5;
                    }
                  </style>
                </div>
              </div>
            </div>
          </section>
          
          <section class="m-textimage" data-imgpos="right">
            <div class="container">
              <div class="row">
                <div class="m-textimage__image">
                  <picture class="no-lazyload">
                  <img
                    src="synspace.com/app/uploads/2023/11/iStock-916868472_resized.jpg"
                    alt="典型案例"
                    title="典型案例" />
                  </picture>
                </div>
                <div class="m-textimage__content">
                  <h2 class="m-textimage__title">
                    <span class="red">典型案例</span>
                  </h2>
                  <div class="m-textimage__text">
                    <p>
                      某通讯电子产品研发企业实施IPD三年多来，取得了一定的成效。在产品层面已有了良好的总体规划和掌控，但对专业领域级别工作的可控性不强，经常出现进度一再延期、产品质量不能达标等问题。为了进一步提升其研发管理水平，决定导入CMMI，巩固和深化其IPD实施成效。
                    </p>
                  </div>
                  <div style="margin-top: 20px;">
                    <a href="case-study.php" class="m-button__secondary" style="display: inline-block; padding: 10px 24px; background: #4a6fa5; color: #fff; text-decoration: none; border-radius: 4px; font-size: 14px;">查看详情</a>
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
    <!-- Owl Carousel JS -->
    <script src="https://cdn.bootcdn.net/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
      jQuery(document).ready(function($) {
        if ($('.cases-carousel').length > 0 && typeof $.fn.owlCarousel !== 'undefined') {
          $('.cases-carousel').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            responsive: {
              0: {
                items: 1
              },
              768: {
                items: 2
              },
              992: {
                items: 3
              }
            }
          });
        }
      });
    </script>
  </body>
</html>
