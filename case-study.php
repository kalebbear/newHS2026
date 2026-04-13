<!DOCTYPE html>
<html lang="zh-CN">
<?php 
$pageTitle = '典型案例';
$pageDescription = '华赛咨询典型案例分享，展示CMMI、ASPICE认证咨询成功经验和实施成果。';
$pageKeywords = '典型案例,CMMI案例,ASPICE案例,成功案例';
?>
<?php include 'head.php'; ?>
  <link rel="stylesheet" href="synspace.com/en/main.css" />
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    .case-study-content {
      max-width: 900px;
      margin: 0 auto;
      padding: 40px 20px;
    }
    .case-study-content h2 {
      font-size: 24px;
      color: #333;
      margin-bottom: 20px;
      font-weight: bold;
    }
    .case-study-content h3 {
      font-size: 20px;
      color: #333;
      margin-top: 30px;
      margin-bottom: 15px;
      font-weight: bold;
    }
    .case-study-content p {
      font-size: 16px;
      line-height: 1.8;
      color: #666;
      margin-bottom: 15px;
      text-align: justify;
    }
    .case-study-content ul {
      margin: 15px 0;
      padding-left: 20px;
    }
    .case-study-content li {
      font-size: 16px;
      line-height: 1.8;
      color: #666;
      margin-bottom: 10px;
    }
    .case-study-content .highlight-box {
      background: #f8f9fa;
      border-left: 4px solid #4a6fa5;
      padding: 20px;
      margin: 20px 0;
    }
    .case-study-content .process-list {
      background: #f8f9fa;
      padding: 20px 20px 20px 40px;
      border-radius: 8px;
      margin: 20px 0;
    }
    .case-study-content .process-list li {
      margin-bottom: 8px;
    }
    .case-study-content .results-section {
      background: #f0f7ff;
      padding: 25px;
      border-radius: 8px;
      margin: 25px 0;
    }
    .case-study-content .results-section h3 {
      margin-top: 0;
      color: #4a6fa5;
    }
    .case-study-content .metric-box {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 15px;
      margin: 20px 0;
    }
    .case-study-content .metric-item {
      background: #fff;
      padding: 15px;
      border-radius: 6px;
      text-align: center;
      border: 1px solid #e9ecef;
    }
    .case-study-content .metric-value {
      font-size: 24px;
      font-weight: bold;
      color: #4a6fa5;
    }
    .case-study-content .metric-label {
      font-size: 14px;
      color: #666;
      margin-top: 5px;
    }
    .case-study-content .chart-container {
      background: #fff;
      padding: 30px;
      border-radius: 8px;
      border: 1px solid #e9ecef;
      margin: 30px 0;
    }
    .case-study-content .chart-container h4 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
      font-size: 18px;
    }
    .case-study-content .chart-wrapper {
      position: relative;
      height: 400px;
      margin: 20px 0;
    }
    .case-study-content .problem-chart {
      background: #fff8f8;
      padding: 20px;
      border-radius: 8px;
      margin: 20px 0;
      border-left: 4px solid #4a6fa5;
    }
    .case-study-content .problem-chart h4 {
      color: #4a6fa5;
      margin-bottom: 15px;
    }
    .case-study-content .status-legend {
      display: flex;
      justify-content: center;
      gap: 30px;
      margin: 20px 0;
      flex-wrap: wrap;
    }
    .case-study-content .status-item {
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .case-study-content .status-color {
      width: 20px;
      height: 20px;
      border-radius: 4px;
    }
    .case-study-content .status-red {
      background: #4a6fa5;
    }
    .case-study-content .status-yellow {
      background: #ffc107;
    }
    .case-study-content .status-green {
      background: #28a745;
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
    ['title' => '典型案例', 'url' => null]
];
include 'pageheader.php';
?>
        <div class="m-ctypes">
          <section class="m-section">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="case-study-content">
                    <h2>华*通讯电子产品研发企业CMMI实施案例</h2>
                    
                    <p>华*通讯电子产品研发企业实施IPD三年多来，取得了一定的成效。在产品层面已有了良好的总体规划和掌控，但对专业领域级别工作的可控性不强，经常出现进度一再延期、产品质量不能达标等问题。为了进一步提升其研发管理水平，决定导入CMMI，巩固和深化其IPD实施成效。</p>
                    
                    <p>从最初的问题诊断到最终的评估认证工作，企业总共用了两年半的时间，企业针对自主产品研发、客户订制性开发、ODM、OEM、OBM等不同业务模式制定了不同的业务流程，并自主研发了一套PLM系统(Process Lifecycle Management System)加强研发流程细节管控、提升工作效率。</p>
                    
                    <h3>实施过程</h3>
                    <ul class="process-list">
                      <li>启动阶段主要是针对实施CMMI工作进行可行性分析，将目标设定为CMMI三级，成立项目组，立案和开工。</li>
                      <li>然后开始制定改进计划，制定改进计划时为了明确改进的内容、所需的资源、工作量和难度，华赛组织进行了一次详细差距分析，分析当前实际情况与CMMI Level3的差距。</li>
                      <li>差距分析之后，华赛根据识别出来的问题进行了一些专题知识培训，主要包括项目管理、配置管理、质量保证、测试、采购、培训知识等。</li>
                      <li>在过程定义阶段华赛咨询师组织公司过程改进小组开展讨论，明确不同业务采用不同的流程，建立过程体系。</li>
                      <li>在过程标准第一版发布后，首先在小范围内进行试点运行，然后在全公司推行实施。</li>
                      <li>在过程标准推行中进行阶段性的总结，分析和报告过程改进成效，最后进行评估认证工作达到CMMI三级水平。</li>
                    </ul>
                    
                    <h3>问题诊断</h3>
                    <p>在过程改进最初的差距分析中，经过华赛咨询师与客户共同组成的调查小组对实施CMMI之前业务流程的调查分析，发现企业对于研发前期的质量控制较为缺乏，在需求和设计阶段引入了大量的缺陷，这些缺陷极大的增加了后续产品集成时的工作量，导致项目延期和产品质量低下等问题。</p>
                    
                    <div class="highlight-box">
                      <p><strong>本次调查共发现了261个问题，其中有八类问题最为突出，占了问题总数的85％。</strong></p>
                    </div>
                    
                    <div class="problem-chart">
                       <h4>问题分布统计</h4>
                       <div style="height: 300px; position: relative;">
                         <canvas id="problemChart"></canvas>
                       </div>
                     </div>
                    
                    <p>这几个方面的问题是：</p>
                    <ol>
                      <li>跨部门沟通困难。</li>
                      <li>项目计划质量低下，对计划未进行严格监控。</li>
                      <li>需求不稳定。</li>
                      <li>缺乏前期质量控制。</li>
                      <li>开发人员自己测试，测试工作缺乏管理。</li>
                      <li>各种版本漫天飞。</li>
                      <li>产品集成困难</li>
                      <li>经验教训未积累。</li>
                    </ol>
                    
                    <h3>CMMI成熟度评估</h3>
                    <p>华赛公司将发现的问题与CMMI模型三级想对照，用以下图形描述实施CMMI之前的企业现状。其中红色为相较CMMI三级有较大差距的地方，黄色为有少量问题，绿色为满足CMMI模型。</p>
                    
                    <div class="status-legend">
                      <div class="status-item">
                        <div class="status-color status-red"></div>
                        <span>有较大差距</span>
                      </div>
                      <div class="status-item">
                        <div class="status-color status-yellow"></div>
                        <span>有少量问题</span>
                      </div>
                      <div class="status-item">
                        <div class="status-color status-green"></div>
                        <span>满足CMMI模型</span>
                      </div>
                    </div>
                    
                    <div class="chart-container">
                       <h4>实施前 vs 实施后对比</h4>
                       <div style="height: 400px; position: relative;">
                         <canvas id="cmmiChart"></canvas>
                       </div>
                     </div>
                    
                    <h3>实施成效</h3>
                    <p>经过两年多时间的推行，企业成功达到CMMI三级水平，下图是正式评估时的分析结果：企业的研发管理水平有较大的提升，主要表现在以下几点：</p>
                    
                    <div class="results-section">
                      <h3>1. 工作流程规范化</h3>
                      <p>以往项目工作需要较多管理层的干预，遇到问题往往需要升级到管理部门，然后有管理部门做出决策。过程改进之后各岗位，尤其是跨部门间的分工明确，什么时候谁负责做什么事情，应该产出什么工作产品，都有明确的规程进行限制和作业指南进行引导。由以往的"人治"逐渐转为了"法治"。因为有一些简明扼要的报告向管理层反馈项目信息，管理层可以将以往花费在了解项目情况的时间和精力用到一些更重要的事情上，例如人才力提升和企业发展规划等工作。</p>
                    </div>
                    
                    <div class="results-section">
                      <h3>2. 更多的经验教训积累</h3>
                      <p>以往项目结案后，该项目的经验教训都留在项目成员的大脑里，不能充分的将这些经验教训共享给其它人或其它项目组，一旦这些项目成员离职后，这些经验教训就随之离开了公司。尤其是一些代码文件，换个人接手后很难读懂这些文件，需要花费大量的时间研究，也增加了出错的几率。现在项目中产生了很多文档，尤其是一些设计文档和一些项目管理经验教训总结的文档和数据，逐渐积累形成了公司的过程资产库，将经验教训进行管理，为公司的发展提供了坚实的基石。</p>
                    </div>
                    
                    <div class="results-section">
                      <h3>3. 研发绩效明显提升</h3>
                      <p>研发绩效明显得到了提升，虽然在引入CMMI进行过程改进之前公司因忽视度量工作而缺乏数据积累，但我们为了展现过程改进绩效对以往的项目进行了回顾和调查得到以下数据：</p>
                    </div>
                    
                    
                    
                    <h3>数据对比图表</h3>
                    <div class="chart-container">
                      <h4>进度偏差对比</h4>
                      <div style="height: 300px; position: relative;">
                        <canvas id="scheduleChart"></canvas>
                      </div>
                    </div>
                    <div class="chart-container">
                      <h4>遗留缺陷率对比</h4>
                      <div style="height: 300px; position: relative;">
                        <canvas id="defectChart"></canvas>
                      </div>
                    </div>
                    <div class="chart-container">
                      <h4>需求稳定度对比</h4>
                      <div style="height: 300px; position: relative;">
                        <canvas id="requirementChart"></canvas>
                      </div>
                    </div>
                    <p>由上表可以看出：</p>
                    <div class="metric-box">
                      <div class="metric-item">
                        <div class="metric-value">80%</div>
                        <div class="metric-label">进度偏差上限降低</div>
                      </div>
                      <div class="metric-item">
                        <div class="metric-value">23%</div>
                        <div class="metric-label">进度偏差波动范围缩小</div>
                      </div>
                      <div class="metric-item">
                        <div class="metric-value">0.13%</div>
                        <div class="metric-label">遗留缺陷率上限降低</div>
                      </div>
                      <div class="metric-item">
                        <div class="metric-value">2%</div>
                        <div class="metric-label">遗留缺陷率波动范围缩小</div>
                      </div>
                      <div class="metric-item">
                        <div class="metric-value">20%</div>
                        <div class="metric-label">需求稳定度下限提升</div>
                      </div>
                      <div class="metric-item">
                        <div class="metric-value">13%</div>
                        <div class="metric-label">需求稳定度波动范围缩小</div>
                      </div>
                    </div>
                    
                    <p>上下限改变说明项目研发能力提升，波动范围缩小说明项目更加受控。</p>
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
      // 问题分布图表
      const problemCtx = document.getElementById('problemChart').getContext('2d');
      new Chart(problemCtx, {
        type: 'bar',
        data: {
          labels: ['跨部门沟通', '项目计划', '需求不稳定', '缺乏质量控制', '测试管理', '版本管理', '产品集成', '经验积累'],
          datasets: [{
            label: '问题数量',
            data: [35, 42, 38, 45, 32, 28, 25, 16],
            backgroundColor: '#4a6fa5',
            borderColor: '#4a6fa5',
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          plugins: {
            legend: {
              display: false
            },
            title: {
              display: true,
              text: '八类突出问题分布（共261个问题）',
              font: {
                size: 16
              }
            }
          },
          scales: {
            y: {
              beginAtZero: true,
              title: {
                display: true,
                text: '问题数量'
              }
            }
          }
        }
      });

      // CMMI实施前后对比图表
      const cmmiCtx = document.getElementById('cmmiChart').getContext('2d');
      new Chart(cmmiCtx, {
        type: 'radar',
        data: {
          labels: ['需求管理', '项目策划', '项目监控', '质量管理', '配置管理', '度量分析', '过程管理'],
          datasets: [{
            label: '实施前',
            data: [30, 35, 40, 25, 45, 20, 30],
            backgroundColor: 'rgba(220, 53, 69, 0.2)',
            borderColor: '#4a6fa5',
            borderWidth: 2,
            pointBackgroundColor: '#4a6fa5'
          }, {
            label: '实施后',
            data: [85, 88, 90, 82, 87, 80, 85],
            backgroundColor: 'rgba(40, 167, 69, 0.2)',
            borderColor: '#28a745',
            borderWidth: 2,
            pointBackgroundColor: '#28a745'
          }]
        },
        options: {
          responsive: true,
          plugins: {
            legend: {
              position: 'top',
              labels: {
                font: {
                  size: 14
                }
              }
            }
          },
          scales: {
            r: {
              beginAtZero: true,
              max: 100,
              min: 0,
              ticks: {
                stepSize: 20
              }
            }
          }
        }
      });

      // 进度偏差对比图表
      const scheduleCtx = document.getElementById('scheduleChart').getContext('2d');
      new Chart(scheduleCtx, {
        type: 'bar',
        data: {
          labels: ['进度偏差上限', '进度偏差波动范围'],
          datasets: [{
            label: '改进前',
            data: [100, 100],
            backgroundColor: '#4a6fa5',
            borderColor: '#4a6fa5',
            borderWidth: 1
          }, {
            label: '改进后',
            data: [20, 77],
            backgroundColor: '#28a745',
            borderColor: '#28a745',
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          plugins: {
            legend: {
              position: 'top'
            },
            title: {
              display: true,
              text: '进度偏差：上限降低80%，波动范围缩小23%',
              font: {
                size: 14
              }
            }
          },
          scales: {
            y: {
              beginAtZero: true,
              title: {
                display: true,
                text: '相对值'
              }
            }
          }
        }
      });

      // 遗留缺陷率对比图表
      const defectCtx = document.getElementById('defectChart').getContext('2d');
      new Chart(defectCtx, {
        type: 'bar',
        data: {
          labels: ['遗留缺陷率上限', '遗留缺陷率波动范围'],
          datasets: [{
            label: '改进前',
            data: [100, 100],
            backgroundColor: '#4a6fa5',
            borderColor: '#4a6fa5',
            borderWidth: 1
          }, {
            label: '改进后',
            data: [99.87, 98],
            backgroundColor: '#28a745',
            borderColor: '#28a745',
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          plugins: {
            legend: {
              position: 'top'
            },
            title: {
              display: true,
              text: '遗留缺陷率：上限降低0.13%，波动范围缩小2%',
              font: {
                size: 14
              }
            }
          },
          scales: {
            y: {
              beginAtZero: false,
              min: 90,
              max: 105,
              title: {
                display: true,
                text: '相对值'
              }
            }
          }
        }
      });

      // 需求稳定度对比图表
      const requirementCtx = document.getElementById('requirementChart').getContext('2d');
      new Chart(requirementCtx, {
        type: 'bar',
        data: {
          labels: ['需求稳定度下限', '需求稳定度波动范围'],
          datasets: [{
            label: '改进前',
            data: [60, 100],
            backgroundColor: '#4a6fa5',
            borderColor: '#4a6fa5',
            borderWidth: 1
          }, {
            label: '改进后',
            data: [80, 87],
            backgroundColor: '#28a745',
            borderColor: '#28a745',
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          plugins: {
            legend: {
              position: 'top'
            },
            title: {
              display: true,
              text: '需求稳定度：下限提升20%，波动范围缩小13%',
              font: {
                size: 14
              }
            }
          },
          scales: {
            y: {
              beginAtZero: false,
              min: 50,
              max: 110,
              title: {
                display: true,
                text: '相对值'
              }
            }
          }
        }
      });
    </script>
  </body>
</html>
