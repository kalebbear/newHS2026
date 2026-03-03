<!DOCTYPE html>
<html lang="zh-CN">
<?php $pageTitle = '华赛工具'; ?>
<?php include 'head.php'; ?>
  <link rel="stylesheet" href="synspace.com/en/main.css" />
  <style>
    .tab-container {
      max-width: 1200px;
      margin: 0 auto;
    }
    .tab-nav {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin-bottom: 40px;
      border-bottom: 2px solid #e9ecef;
      padding-bottom: 0;
    }
    .tab-btn {
      padding: 15px 40px;
      font-size: 16px;
      font-weight: 500;
      color: #666;
      background: none;
      border: none;
      border-bottom: 3px solid transparent;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    .tab-btn:hover {
      color: #4a6fa5;
    }
    .tab-btn.active {
      color: #4a6fa5;
      border-bottom-color: #4a6fa5;
    }
    .tab-content {
      display: none;
    }
    .tab-content.active {
      display: block;
      animation: fadeIn 0.3s ease;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
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
    ['title' => '华赛工具', 'url' => null]
];
include 'pageheader.php';
?>
        <div class="m-ctypes">
          
          <!-- Tab 导航 -->
          <section class="m-section" style="padding-bottom: 0;">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="tab-nav">
                    <button class="tab-btn active" onclick="switchTab('tools')">工具介绍</button>
                    <button class="tab-btn" onclick="switchTab('process')">实施流程</button>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- Tab 内容容器 -->
          <div class="tab-container">
            
            <!-- 工具介绍 Tab -->
            <div id="tools-tab" class="tab-content active">
              <!-- PLMStar研发企业管理平台 -->
              <section class="m-section" style="padding-top: 20px;">
                <div class="container">
                  <div class="row">
                    <div class="col-12">
                      <h2 class="m-teaserboxwide__title" style="text-align: center; margin-bottom: 40px;">
                        <span class="red">PLMStar研发企业管理平台</span>
                      </h2>
                      
                      <div style="background: #fff; padding: 40px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); margin-bottom: 40px;">
                        <p style="font-size: 16px; line-height: 1.8; color: #333; margin-bottom: 20px;">
                          PLMStar研发企业管理平台是华赛公司总结多年来的咨询和培训经验，为中国研发企业打造的管理平台，目的是快速提升研发管理水平、提升研发工作效率。
                        </p>
                        <p style="font-size: 16px; line-height: 1.8; color: #333; margin-bottom: 20px;">
                          PLMStar融合了业界先进的研发管理理念，包括<strong>IPD、CMMI、TS16949、APQP、PMBOK</strong>等，覆盖产品研发全过程，包括产品规划、产品开发与维护过程的管理和支撑模块，涵盖产品研发的组合管理、需求管理、项目管理、产品数据管理（文档、BOM、零部件）、工程变更管理、质量管理、成本管理、研发知识管理、研发绩效管理等领域。
                        </p>
                      </div>

                      <!-- 核心功能模块 -->
                      <h3 style="text-align: center; margin-bottom: 30px; color: #333;">核心功能模块</h3>
                      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px; margin-bottom: 40px;">
                        <!-- 组合管理 -->
                        <div style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-left: 4px solid #4a6fa5;">
                          <div style="width: 50px; height: 50px; background: #4a6fa5; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 20px; margin-bottom: 15px;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                              <rect x="3" y="3" width="7" height="7"></rect>
                              <rect x="14" y="3" width="7" height="7"></rect>
                              <rect x="14" y="14" width="7" height="7"></rect>
                              <rect x="3" y="14" width="7" height="7"></rect>
                            </svg>
                          </div>
                          <h4 style="margin: 0 0 10px 0; color: #333; font-size: 16px;">组合管理</h4>
                          <p style="margin: 0; color: #666; font-size: 14px; line-height: 1.6;">产品组合规划与投资决策管理</p>
                        </div>

                        <!-- 需求管理 -->
                        <div style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-left: 4px solid #4a6fa5;">
                          <div style="width: 50px; height: 50px; background: #4a6fa5; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 20px; margin-bottom: 15px;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                              <polyline points="14 2 14 8 20 8"></polyline>
                              <line x1="16" y1="13" x2="8" y2="13"></line>
                              <line x1="16" y1="17" x2="8" y2="17"></line>
                              <polyline points="10 9 9 9 8 9"></polyline>
                            </svg>
                          </div>
                          <h4 style="margin: 0 0 10px 0; color: #333; font-size: 16px;">需求管理</h4>
                          <p style="margin: 0; color: #666; font-size: 14px; line-height: 1.6;">端到端的需求采集、分析与跟踪</p>
                        </div>

                        <!-- 项目管理 -->
                        <div style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-left: 4px solid #4a6fa5;">
                          <div style="width: 50px; height: 50px; background: #4a6fa5; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 20px; margin-bottom: 15px;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                              <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                              <line x1="16" y1="2" x2="16" y2="6"></line>
                              <line x1="8" y1="2" x2="8" y2="6"></line>
                              <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                          </div>
                          <h4 style="margin: 0 0 10px 0; color: #333; font-size: 16px;">项目管理</h4>
                          <p style="margin: 0; color: #666; font-size: 14px; line-height: 1.6;">高效规范的研发项目管理</p>
                        </div>

                        <!-- 产品数据管理 -->
                        <div style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-left: 4px solid #4a6fa5;">
                          <div style="width: 50px; height: 50px; background: #4a6fa5; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 20px; margin-bottom: 15px;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                              <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
                            </svg>
                          </div>
                          <h4 style="margin: 0 0 10px 0; color: #333; font-size: 16px;">产品数据管理</h4>
                          <p style="margin: 0; color: #666; font-size: 14px; line-height: 1.6;">文档、BOM、零部件统一管理</p>
                        </div>

                        <!-- 工程变更管理 -->
                        <div style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-left: 4px solid #4a6fa5;">
                          <div style="width: 50px; height: 50px; background: #4a6fa5; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 20px; margin-bottom: 15px;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                              <polygon points="23 7 16 12 23 17 23 7"></polygon>
                              <rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect>
                            </svg>
                          </div>
                          <h4 style="margin: 0 0 10px 0; color: #333; font-size: 16px;">工程变更管理</h4>
                          <p style="margin: 0; color: #666; font-size: 14px; line-height: 1.6;">变更申请、评审、执行全流程管理</p>
                        </div>

                        <!-- 质量管理 -->
                        <div style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-left: 4px solid #4a6fa5;">
                          <div style="width: 50px; height: 50px; background: #4a6fa5; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 20px; margin-bottom: 15px;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>
                          </div>
                          <h4 style="margin: 0 0 10px 0; color: #333; font-size: 16px;">质量管理</h4>
                          <p style="margin: 0; color: #666; font-size: 14px; line-height: 1.6;">质量保证与质量控制</p>
                        </div>

                        <!-- 成本管理 -->
                        <div style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-left: 4px solid #4a6fa5;">
                          <div style="width: 50px; height: 50px; background: #4a6fa5; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 20px; margin-bottom: 15px;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                              <line x1="12" y1="1" x2="12" y2="23"></line>
                              <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                          </div>
                          <h4 style="margin: 0 0 10px 0; color: #333; font-size: 16px;">成本管理</h4>
                          <p style="margin: 0; color: #666; font-size: 14px; line-height: 1.6;">研发成本核算与控制</p>
                        </div>

                        <!-- 研发知识管理 -->
                        <div style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-left: 4px solid #4a6fa5;">
                          <div style="width: 50px; height: 50px; background: #4a6fa5; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 20px; margin-bottom: 15px;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                              <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                              <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                            </svg>
                          </div>
                          <h4 style="margin: 0 0 10px 0; color: #333; font-size: 16px;">研发知识管理</h4>
                          <p style="margin: 0; color: #666; font-size: 14px; line-height: 1.6;">知识积累、共享与复用</p>
                        </div>

                        <!-- 研发绩效管理 -->
                        <div style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-left: 4px solid #4a6fa5;">
                          <div style="width: 50px; height: 50px; background: #4a6fa5; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 20px; margin-bottom: 15px;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                              <line x1="18" y1="20" x2="18" y2="10"></line>
                              <line x1="12" y1="20" x2="12" y2="4"></line>
                              <line x1="6" y1="20" x2="6" y2="14"></line>
                            </svg>
                          </div>
                          <h4 style="margin: 0 0 10px 0; color: #333; font-size: 16px;">研发绩效管理</h4>
                          <p style="margin: 0; color: #666; font-size: 14px; line-height: 1.6;">研发人员绩效评估与激励</p>
                        </div>
                      </div>

                      <!-- 实施价值 -->
                      <div style="background: #f8f9fa; padding: 30px; border-radius: 8px;">
                        <h4 style="color: #4a6fa5; margin-bottom: 15px;">企业实施PLM的价值</h4>
                        <p style="color: #666; line-height: 1.8; margin-bottom: 15px;">
                          企业实施PLM可以迅速建立一套满足<strong>CMMI三级</strong>的流程体系，使流程和IT系统有机结合，确保研发管理流程的有效"落地和固化"，提高流程的透明性和可操作性。
                        </p>
                        <p style="color: #666; line-height: 1.8; margin-bottom: 15px;">
                          真正实现端到端的需求管理、高效规范的研发项目管理、产品数据管理以及研发绩效管理，促进人员知识技能的积累、共享和提升，有效提升公司研发管理水平。
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>

            <!-- 实施流程 Tab -->
            <div id="process-tab" class="tab-content">
              <section class="m-section" style="padding-top: 20px;">
                <div class="container">
                  <div class="row">
                    <div class="col-12">
                      <h2 class="m-teaserboxwide__title" style="text-align: center; margin-bottom: 40px;">
                        <span class="red">实施流程</span>
                      </h2>
                      
                      <div style="background: #fff; padding: 40px;">
                        <p style="font-size: 16px; line-height: 1.8; color: #333;">
                          为确保华赛研发管理工具能够与企业现行的研发管理流程完美融合，确保公司业务的连续性，华赛研发管理工具在企业分为<strong>七个阶段</strong>实施：
                        </p>
                      </div>

                      <!-- 七个阶段 -->
                      <div style="display: flex; flex-direction: column; gap: 30px;">
                        
                        <!-- 第一阶段 -->
                        <div style="display: flex; gap: 25px; align-items: flex-start;">
                          <div style="flex-shrink: 0; width: 70px; height: 70px; background: #4a6fa5; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 28px; font-weight: bold;">1</div>
                          <div style="flex: 1; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                            <h4 style="margin: 0 0 15px 0; color: #4a6fa5; font-size: 20px;">建立实施策略</h4>
                            <p style="margin: 0; color: #666; line-height: 1.8;">
                              主要从商务和技术上来计划项目的范围，并确定项目的目标。这一阶段的工作，包括建立由公司主要领导为首的项目实施领导小组和各部门有关人员参加的项目实施小组，并开始对员工进行初步的业务管理观念和方法培训。具体制定出企业实施应用管理的策略和目标。
                            </p>
                          </div>
                        </div>

                        <!-- 第二阶段 -->
                        <div style="display: flex; gap: 25px; align-items: flex-start;">
                          <div style="flex-shrink: 0; width: 70px; height: 70px; background: #4a6fa5; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 28px; font-weight: bold;">2</div>
                          <div style="flex: 1; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                            <h4 style="margin: 0 0 15px 0; color: #4a6fa5; font-size: 20px;">业务流程分析</h4>
                            <p style="margin: 0; color: #666; line-height: 1.8;">
                              主要是定义项目的内容，即对现行的管理进行仔细地回顾和描述，从而认识项目的业务和技术上的具体要求。一般在这个分阶段要编写一个项目定义分析报告，可以更多地是借助于流程图的形式来描述目前的流程，并从中找出希望改进的地方，为进一步解决方案的设计创造条件。为此，需对项目实施小组的成员进行比较系统的业务管理的概念和华赛软件系统功能层次的培训。
                            </p>
                          </div>
                        </div>

                        <!-- 第三阶段 -->
                        <div style="display: flex; gap: 25px; align-items: flex-start;">
                          <div style="flex-shrink: 0; width: 70px; height: 70px; background: #4a6fa5; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 28px; font-weight: bold;">3</div>
                          <div style="flex: 1; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                            <h4 style="margin: 0 0 15px 0; color: #4a6fa5; font-size: 20px;">设计解决方案</h4>
                            <p style="margin: 0; color: #666; line-height: 1.8;">
                              主要是对上阶段形成的业务分析流程，结合业务管理的基本概念和具体的软件功能，逐项进行回顾、分析，以便对目前每个管理业务流程，提出解决方案。解决方案也许是直接可以套用系统中某些功能，也许是对现行管理流程作一些改进，也可能是对软件系统作一些必要的二次开发。这时一般应编写项目说明书之类的文档，作为一个里程碑也作为建立系统的设计任务书。
                            </p>
                          </div>
                        </div>

                        <!-- 第四阶段 -->
                        <div style="display: flex; gap: 25px; align-items: flex-start;">
                          <div style="flex-shrink: 0; width: 70px; height: 70px; background: #4a6fa5; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 28px; font-weight: bold;">4</div>
                          <div style="flex: 1; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                            <h4 style="margin: 0 0 15px 0; color: #4a6fa5; font-size: 20px;">建立应用系统</h4>
                            <p style="margin: 0; color: #666; line-height: 1.8;">
                              本阶段需根据前一阶段拟订的方案，对管理上（或组织上）需改进之处制定改进方案，包括调整分工、规范流程、统一方法、标准信息编码等。从软件来讲，系统初始化设计及二次开发工作可开始进行。这样建立起一个符合企业管理思想的应用系统。此时大量的基础数据的整理工作也将着手进行。
                            </p>
                          </div>
                        </div>

                        <!-- 第五阶段 -->
                        <div style="display: flex; gap: 25px; align-items: flex-start;">
                          <div style="flex-shrink: 0; width: 70px; height: 70px; background: #4a6fa5; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 28px; font-weight: bold;">5</div>
                          <div style="flex: 1; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                            <h4 style="margin: 0 0 15px 0; color: #4a6fa5; font-size: 20px;">文档编码</h4>
                            <p style="margin: 0; color: #666; line-height: 1.8;">
                              在建立应用系统的同时，除了必须对软件进行二次开发，按软件工程要求提供必须的文档以外，对管理要改进的流程及方法等方面，也必须编写或修改原来的制度、职责、流程图。这时，系统一旦已建立起来，可着手对最终用户的主要应用进行培训。
                            </p>
                          </div>
                        </div>

                        <!-- 第六阶段 -->
                        <div style="display: flex; gap: 25px; align-items: flex-start;">
                          <div style="flex-shrink: 0; width: 70px; height: 70px; background: #4a6fa5; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 28px; font-weight: bold;">6</div>
                          <div style="flex: 1; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                            <h4 style="margin: 0 0 15px 0; color: #4a6fa5; font-size: 20px;">系统切换</h4>
                            <p style="margin: 0; color: #666; line-height: 1.8;">
                              在这个阶段，为了减少系统实施时的风险，各职能部门分别按照自己的日常业务活动，参照已文档化的流程，运行计算机系统进行测试，以证实其系统是基本可行的。这时才开始正式向新系统输入数据、创建初态、定义参数、开始运行。为了保证切换的成功，这时项目领导小组要求及时地发布许多指令，来逐步地进行系统地切换。一般来讲，能有一个新老系统并行的运行期间，风险可更小些。
                            </p>
                          </div>
                        </div>

                        <!-- 第七阶段 -->
                        <div style="display: flex; gap: 25px; align-items: flex-start;">
                          <div style="flex-shrink: 0; width: 70px; height: 70px; background: #4a6fa5; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 28px; font-weight: bold;">7</div>
                          <div style="flex: 1; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                            <h4 style="margin: 0 0 15px 0; color: #4a6fa5; font-size: 20px;">运行维护</h4>
                            <p style="margin: 0; color: #666; line-height: 1.8;">
                              在并行一段时间后，事实证明系统是安全、可靠、可行的，那么可以正式投入运行。并在运行中作好有关的记录和报告，并及时地发现运行中的问题，以便进行维护、升级和定制化开发。
                            </p>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>

          </div>

        </div>
      </main>
<?php include 'footer.php'; ?>
    </div>
<?php include 'scripts.php'; ?>
    
    <script>
      function switchTab(tabName) {
        // 移除所有active类
        document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
        document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));
        
        // 添加active类到当前tab
        event.target.classList.add('active');
        document.getElementById(tabName + '-tab').classList.add('active');
      }
    </script>
  </body>
</html>
