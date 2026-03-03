<!DOCTYPE html>
<html lang="zh-CN">
<?php 
$pageTitle = '客户评价';
$pageDescription = '华赛咨询客户评价和成功案例，上千家企业选择华赛作为CMMI、ASPICE认证咨询合作伙伴。';
$pageKeywords = '客户评价,华赛客户,成功案例,客户见证';
?>
<?php include 'head.php'; ?>
<link rel="stylesheet" href="synspace.com/en/main.css" />

<body
    class="wp-singular page-template-default page wp-embed-responsive wp-theme-synspace">
    <div id="app">
        <?php include 'header.php'; ?>
        <main id="main" class="main">
            <?php
            ;
            $breadcrumbItems = [
                ['title' => '首页', 'url' => 'index.php'],
                ['title' => '华赛客户', 'url' => null]
            ];
            include 'pageheader.php';
            ?>
            <div class="m-ctypes">
                <section class="m-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="m-teaserboxwide__title" style="text-align: center; margin-bottom: 40px;">
                                    <span class="red">客户评价</span>
                                </h2>
                                <div style="max-width: 800px; margin: 0 auto; line-height: 1.8; margin-bottom: 60px;">
                                    <p style="text-align: center; font-size: 18px; color: #666;">
                                        华赛的专业服务得到了众多客户的认可和好评，以下是部分客户的真实评价
                                    </p>
                                </div>
                                
                                <!-- 客户评价卡片 -->
                                <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px;">
                                    <!-- 评价卡片 1 -->
                                    <div style="max-width: 350px; background-color: #f9f9f9; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                                        <div style="display: flex; align-items: center; margin-bottom: 20px;">
                                            <div style="width: 60px; height: 60px; background-color: #333; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold;">
                                                李
                                            </div>
                                            <div style="margin-left: 15px;">
                                                <h4 style="margin: 0; font-size: 16px; font-weight: 600;">李**</h4>
                                                <p style="margin: 5px 0 0 0; font-size: 14px; color: #666;">深圳信***科技有限公司 CTO</p>
                                            </div>
                                        </div>
                                        <div style="margin-bottom: 15px;">
                                            <div style="color: #ffc107; font-size: 16px;">
                                                ★★★★★
                                            </div>
                                        </div>
                                        <p style="font-size: 14px; line-height: 1.6; color: #333;">
                                            华赛的CMMI咨询服务非常专业，顾问团队经验丰富，为我们公司量身定制了符合业务需求的流程改进方案。通过实施CMMI，我们的研发管理水平得到了显著提升，项目交付周期缩短了30%，缺陷率降低了45%，客户满意度提升了25个百分点。
                                        </p>
                                    </div>
                                    
                                    <!-- 评价卡片 2 -->
                                    <div style="max-width: 350px; background-color: #f9f9f9; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                                        <div style="display: flex; align-items: center; margin-bottom: 20px;">
                                            <div style="width: 60px; height: 60px; background-color: #333; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold;">
                                                王
                                            </div>
                                            <div style="margin-left: 15px;">
                                                <h4 style="margin: 0; font-size: 16px; font-weight: 600;">王**</h4>
                                                <p style="margin: 5px 0 0 0; font-size: 14px; color: #666;">上海汽***零部件有限公司 质量总监</p>
                                            </div>
                                        </div>
                                        <div style="margin-bottom: 15px;">
                                            <div style="color: #ffc107; font-size: 16px;">
                                                ★★★★★
                                            </div>
                                        </div>
                                        <p style="font-size: 14px; line-height: 1.6; color: #333;">
                                            华赛的ASPICE评估服务非常专业，顾问团队对汽车行业标准有深入的理解，为我们提供了详细的差距分析报告和改进建议。通过他们的指导，我们仅用8个月就成功通过了ASPICE CL2评估，为公司的汽车电子业务发展奠定了坚实的基础。
                                        </p>
                                    </div>
                                    
                                    <!-- 评价卡片 3 -->
                                    <div style="max-width: 350px; background-color: #f9f9f9; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                                        <div style="display: flex; align-items: center; margin-bottom: 20px;">
                                            <div style="width: 60px; height: 60px; background-color: #333; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold;">
                                                张
                                            </div>
                                            <div style="margin-left: 15px;">
                                                <h4 style="margin: 0; font-size: 16px; font-weight: 600;">张**</h4>
                                                <p style="margin: 5px 0 0 0; font-size: 14px; color: #666;">北京软***科技有限公司 研发总监</p>
                                            </div>
                                        </div>
                                        <div style="margin-bottom: 15px;">
                                            <div style="color: #ffc107; font-size: 16px;">
                                                ★★★★★
                                            </div>
                                        </div>
                                        <p style="font-size: 14px; line-height: 1.6; color: #333;">
                                            华赛的流程落地咨询服务非常实用，顾问团队不仅提供了专业的理论指导，还亲自参与到我们的流程改进实践中。通过他们的帮助，我们的需求变更管理效率有了明显提升，测试覆盖率也得到了大幅提高，产品上线时间显著缩短。
                                        </p>
                                    </div>
                                    
                                    <!-- 评价卡片 4 -->
                                    <div style="max-width: 350px; background-color: #f9f9f9; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                                        <div style="display: flex; align-items: center; margin-bottom: 20px;">
                                            <div style="width: 60px; height: 60px; background-color: #333; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold;">
                                                陈
                                            </div>
                                            <div style="margin-left: 15px;">
                                                <h4 style="margin: 0; font-size: 16px; font-weight: 600;">陈**</h4>
                                                <p style="margin: 5px 0 0 0; font-size: 14px; color: #666;">广州电***制造有限公司 总经理</p>
                                            </div>
                                        </div>
                                        <div style="margin-bottom: 15px;">
                                            <div style="color: #ffc107; font-size: 16px;">
                                                ★★★★★
                                            </div>
                                        </div>
                                        <p style="font-size: 14px; line-height: 1.6; color: #333;">
                                            华赛的服务团队非常专业和敬业，他们对CMMI标准的理解非常深入，能够根据我们公司的实际情况提供个性化的解决方案。通过与华赛的合作，我们的研发管理水平得到了显著提升，产品质量和交付能力都有了很大改善。
                                        </p>
                                    </div>
                                    
                                    <!-- 评价卡片 5 -->
                                    <div style="max-width: 350px; background-color: #f9f9f9; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                                        <div style="display: flex; align-items: center; margin-bottom: 20px;">
                                            <div style="width: 60px; height: 60px; background-color: #333; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold;">
                                                刘
                                            </div>
                                            <div style="margin-left: 15px;">
                                                <h4 style="margin: 0; font-size: 16px; font-weight: 600;">刘**</h4>
                                                <p style="margin: 5px 0 0 0; font-size: 14px; color: #666;">成都智***软件有限公司 技术总监</p>
                                            </div>
                                        </div>
                                        <div style="margin-bottom: 15px;">
                                            <div style="color: #ffc107; font-size: 16px;">
                                                ★★★★★
                                            </div>
                                        </div>
                                        <p style="font-size: 14px; line-height: 1.6; color: #333;">
                                            华赛的AI赋能咨询服务让我们受益匪浅，顾问团队帮助我们将AI技术应用到研发管理中，实现了需求分析自动化和测试用例生成智能化。通过实施AI解决方案，我们的研发效率有了明显提升，人力成本也有所降低，产品创新速度加快了许多。
                                        </p>
                                    </div>
                                    
                                    <!-- 评价卡片 6 -->
                                    <div style="max-width: 350px; background-color: #f9f9f9; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                                        <div style="display: flex; align-items: center; margin-bottom: 20px;">
                                            <div style="width: 60px; height: 60px; background-color: #333; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold;">
                                                赵
                                            </div>
                                            <div style="margin-left: 15px;">
                                                <h4 style="margin: 0; font-size: 16px; font-weight: 600;">赵**</h4>
                                                <p style="margin: 5px 0 0 0; font-size: 14px; color: #666;">杭州网***科技有限公司 项目经理</p>
                                            </div>
                                        </div>
                                        <div style="margin-bottom: 15px;">
                                            <div style="color: #ffc107; font-size: 16px;">
                                                ★★★★★
                                            </div>
                                        </div>
                                        <p style="font-size: 14px; line-height: 1.6; color: #333;">
                                            华赛的流程落地咨询服务非常专业，顾问团队通过深入调研，为我们设计了一套符合互联网行业特点的敏捷研发流程。通过实施这套流程，我们的项目迭代周期明显缩短，团队协作效率得到了很大提升，产品上线成功率也有了显著提高。
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- 客户Logo展示 -->
                <section class="m-section" style="background-color: #f5f5f5; padding: 60px 0; margin-top: 60px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h3 style="text-align: center; margin-bottom: 40px; color: #333;">合作客户</h3>
                                <div style="display: flex; flex-wrap: wrap; justify-content: center; align-items: center; gap: 40px;">
                                    <div style="opacity: 0.7; transition: opacity 0.3s ease; padding: 20px;">
                                        <img src="synspace.com/img/partners/01.png" alt="合作客户" style="max-height: 60px;" />
                                    </div>
                                    <div style="opacity: 0.7; transition: opacity 0.3s ease; padding: 20px;">
                                        <img src="synspace.com/img/partners/02.png" alt="合作客户" style="max-height: 60px;" />
                                    </div>
                                    <div style="opacity: 0.7; transition: opacity 0.3s ease; padding: 20px;">
                                        <img src="synspace.com/img/partners/03.png" alt="合作客户" style="max-height: 60px;" />
                                    </div>
                                    <div style="opacity: 0.7; transition: opacity 0.3s ease; padding: 20px;">
                                        <img src="synspace.com/img/partners/04.png" alt="合作客户" style="max-height: 60px;" />
                                    </div>
                                    <div style="opacity: 0.7; transition: opacity 0.3s ease; padding: 20px;">
                                        <img src="synspace.com/img/partners/05.png" alt="合作客户" style="max-height: 60px;" />
                                    </div>
                                    <div style="opacity: 0.7; transition: opacity 0.3s ease; padding: 20px;">
                                        <img src="synspace.com/img/partners/06.png" alt="合作客户" style="max-height: 60px;" />
                                    </div>
                                    <div style="opacity: 0.7; transition: opacity 0.3s ease; padding: 20px;">
                                        <img src="synspace.com/img/partners/07.png" alt="合作客户" style="max-height: 60px;" />
                                    </div>
                                    <div style="opacity: 0.7; transition: opacity 0.3s ease; padding: 20px;">
                                        <img src="synspace.com/img/partners/08.png" alt="合作客户" style="max-height: 60px;" />
                                    </div>
                                    <div style="opacity: 0.7; transition: opacity 0.3s ease; padding: 20px;">
                                        <img src="synspace.com/img/partners/09.png" alt="合作客户" style="max-height: 60px;" />
                                    </div>
                                    <div style="opacity: 0.7; transition: opacity 0.3s ease; padding: 20px;">
                                        <img src="synspace.com/img/partners/10.png" alt="合作客户" style="max-height: 60px;" />
                                    </div>
                                    <div style="opacity: 0.7; transition: opacity 0.3s ease; padding: 20px;">
                                        <img src="synspace.com/img/partners/11.png" alt="合作客户" style="max-height: 60px;" />
                                    </div>
                                    <div style="opacity: 0.7; transition: opacity 0.3s ease; padding: 20px;">
                                        <img src="synspace.com/img/partners/12.png" alt="合作客户" style="max-height: 60px;" />
                                    </div>
                                    <div style="opacity: 0.7; transition: opacity 0.3s ease; padding: 20px;">
                                        <img src="synspace.com/img/partners/13.png" alt="合作客户" style="max-height: 60px;" />
                                    </div>
                                    <div style="opacity: 0.7; transition: opacity 0.3s ease; padding: 20px;">
                                        <img src="synspace.com/img/partners/14.png" alt="合作客户" style="max-height: 60px;" />
                                    </div>
                                    <div style="opacity: 0.7; transition: opacity 0.3s ease; padding: 20px;">
                                        <img src="synspace.com/img/partners/15.png" alt="合作客户" style="max-height: 60px;" />
                                    </div>
                                    <div style="opacity: 0.7; transition: opacity 0.3s ease; padding: 20px;">
                                        <img src="synspace.com/img/partners/16.png" alt="合作客户" style="max-height: 60px;" />
                                    </div>
                                    <div style="opacity: 0.7; transition: opacity 0.3s ease; padding: 20px;">
                                        <img src="synspace.com/img/partners/17.png" alt="合作客户" style="max-height: 60px;" />
                                    </div>
                                    <div style="opacity: 0.7; transition: opacity 0.3s ease; padding: 20px;">
                                        <img src="synspace.com/img/partners/18.png" alt="合作客户" style="max-height: 60px;" />
                                    </div>
                                    <div style="opacity: 0.7; transition: opacity 0.3s ease; padding: 20px;">
                                        <img src="synspace.com/img/partners/19.png" alt="合作客户" style="max-height: 60px;" />
                                    </div>
                                    <div style="opacity: 0.7; transition: opacity 0.3s ease; padding: 20px;">
                                        <img src="synspace.com/img/partners/20.png" alt="合作客户" style="max-height: 60px;" />
                                    </div>
                                    <div style="opacity: 0.7; transition: opacity 0.3s ease; padding: 20px;">
                                        <img src="synspace.com/img/partners/21.png" alt="合作客户" style="max-height: 60px;" />
                                    </div>
                                    <div style="opacity: 0.7; transition: opacity 0.3s ease; padding: 20px;">
                                        <img src="synspace.com/img/partners/22.png" alt="合作客户" style="max-height: 60px;" />
                                    </div>
                                    <div style="opacity: 0.7; transition: opacity 0.3s ease; padding: 20px;">
                                        <img src="synspace.com/img/partners/23.png" alt="合作客户" style="max-height: 60px;" />
                                    </div>
                                    <div style="opacity: 0.7; transition: opacity 0.3s ease; padding: 20px;">
                                        <img src="synspace.com/img/partners/24.png" alt="合作客户" style="max-height: 60px;" />
                                    </div>
                                    <div style="opacity: 0.7; transition: opacity 0.3s ease; padding: 20px;">
                                        <img src="synspace.com/img/partners/25.png" alt="合作客户" style="max-height: 60px;" />
                                    </div>
                                    <div style="opacity: 0.7; transition: opacity 0.3s ease; padding: 20px;">
                                        <img src="synspace.com/img/partners/26.png" alt="合作客户" style="max-height: 60px;" />
                                    </div>
                                    <div style="opacity: 0.7; transition: opacity 0.3s ease; padding: 20px;">
                                        <img src="synspace.com/img/partners/27.png" alt="合作客户" style="max-height: 60px;" />
                                    </div>
                                    <div style="opacity: 0.7; transition: opacity 0.3s ease; padding: 20px;">
                                        <img src="synspace.com/img/partners/28.png" alt="合作客户" style="max-height: 60px;" />
                                    </div>
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