<?php
require_once 'db_config.php';

$success_message = '';
$error_message = '';

// 处理表单提交
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';
    
    // 验证数据
    $errors = [];
    if (empty($name)) {
        $errors[] = '请输入姓名';
    }
    if (empty($email)) {
        $errors[] = '请输入邮箱';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = '请输入有效的邮箱地址';
    }
    if (empty($message)) {
        $errors[] = '请输入留言内容';
    }
    
    if (empty($errors)) {
        try {
            $stmt = $pdo->prepare("INSERT INTO contact_messages (name, email, phone, message) VALUES (?, ?, ?, ?)");
            $stmt->execute([$name, $email, $phone, $message]);
            $success_message = '感谢您的留言，我们会尽快与您联系！';
        } catch (PDOException $e) {
            $error_message = '提交失败，请稍后重试';
        }
    } else {
        $error_message = implode('<br>', $errors);
    }
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
<?php 
$pageTitle = '联系我们';
$pageDescription = '联系深圳华赛信息咨询有限公司，获取CMMI、ASPICE认证咨询服务。专业的研发管理咨询团队为您提供服务。';
$pageKeywords = '联系我们,华赛咨询,CMMI咨询,ASPICE咨询,深圳咨询';
?>
<?php include 'head.php'; ?>
  <link rel="stylesheet" href="synspace.com/en/main.css" />
  <style>
    /* 修复表单间距 */
    #gform_wrapper_7 .gfield {
      margin-bottom: 20px !important;
    }
    /* 必填标识改为红色 */
    #gform_wrapper_7 .gfield_required_asterisk,
    #gform_wrapper_7 .gfield_required {
      color: #4c7189 !important;
    }
    /* 修复textarea显示 */
    #gform_wrapper_7 .ginput_container_textarea textarea {
      width: 100%;
      min-height: 150px;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 4px;
      resize: vertical;
    }
    /* 修复其他输入框 */
    #gform_wrapper_7 .ginput_container input.large {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 4px;
    }
    /* 验证错误样式 */
    #gform_wrapper_7 .gfield_error input,
    #gform_wrapper_7 .gfield_error textarea {
      border-color: #4a6fa5 !important;
    }
    #gform_wrapper_7 .validation_message {
      color: #4c7189;
      font-size: 12px;
      margin-top: 5px;
    }
  </style>
  <body class="wp-singular page-template page-template-template-contact page page-id-1299 wp-embed-responsive wp-theme-synspace contact">
    <div id="app">
<?php include 'header.php'; ?>
      <main id="main" class="main">
        <section class="m-pageheader">
          <div class="m-pageheader__main">
            <div class="container">
              <div class="row">
                <div class="m-pageheader__innerwrapper">
                  <div class="m-pageheader__inner">
                    <div class="m-pageheader__content">
                      <div class="m-pageheader__title"><h1>联系我们</h1></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="m-pageheader__breadcrumb">
            <div class="container">
              <div class="row">
                <div class="m-breadcrumb__inner">
                  <div class="m-breadcrumb">
                    <span>
                      <span><a href="index.php">首页</a></span>
                      <span class="breadcrumb_last" aria-current="page">联系我们</span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="m-contact">
          <section class="m-contactus">
           
          </section>
          
          <section class="m-contactus" id="contact-info">
            <div class="m-contactus__inner">
              <div class="container" style="padding-top:60px;">
                <div class="row">
                  <div class="m-contactus__left">
                    <h3 class="m-contactus__subtitle">联系方式</h3>
                    <div class="m-contactus__text">
                      <p>您可以通过电话或邮件直接联系我们的专业顾问。</p>
                    </div>
                  </div>
                  <div class="m-contactus__content">
                     <!-- 咨询热线 -->
                      <div class="contact-item" style="background: #4c7189; padding: 25px 30px; border-radius: 12px; color: #fff; text-align: center; flex: 1 1 100%;margin-bottom:20px;">
                        <h4 style="color: rgba(255,255,255,0.9); font-size: 14px; font-weight: 500; margin-bottom: 10px;">24小时咨询热线</h4>
                        <a href="tel:0755-29656825" style="color: #fff; font-size: 28px; font-weight: 700; text-decoration: none; letter-spacing: 2px;">0755-29656825</a>
                      </div>
                    <div class="contact-list" style="display: flex; flex-wrap: wrap; gap: 20px;">
                      <!-- CMMI咨询 谢先生 -->
                      <div class="contact-item" style="background: #fff; padding: 25px 30px; border-radius: 12px; box-shadow: 0 2px 12px rgba(0,0,0,0.06); border: 1px solid #e8e8e8; transition: all 0.3s ease; flex: 1 1 calc(50% - 10px); min-width: 280px;">
                        <div style="margin-bottom: 10px;">
                          <h4 style="color: #4c7189; font-size: 15px; font-weight: 600;">CMMI咨询 <span style="color: #999; font-weight: 400;">（深圳）</span></h4>
                        </div>
                        <p style="color: #333; font-weight: 600; font-size: 16px; margin-bottom: 15px;">谢先生</p>
                        <div style="display: flex; flex-direction: column; gap: 12px;">
                          <a href="tel:14737222742" style="background: #4c7189; color: #fff; padding: 12px 20px; border-radius: 8px; text-decoration: none; display: flex; align-items: center; gap: 12px; font-size: 15px; transition: all 0.3s ease;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            14737222742
                          </a>
                          <a href="mailto:changbo@huasaiinfo.com" style="background: #f8f9fa; color: #333; padding: 12px 20px; border-radius: 8px; text-decoration: none; display: flex; align-items: center; gap: 12px; font-size: 15px; border: 1px solid #e8e8e8; transition: all 0.3s ease; position: relative; z-index: 1;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#4c7189" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            changbo@huasaiinfo.com
                          </a>
                        </div>
                      </div>
                      
                      <!-- CMMI咨询 常先生 -->
                      <div class="contact-item" style="background: #fff; padding: 25px 30px; border-radius: 12px; box-shadow: 0 2px 12px rgba(0,0,0,0.06); border: 1px solid #e8e8e8; transition: all 0.3s ease; flex: 1 1 calc(50% - 10px); min-width: 280px;">
                        <div style="margin-bottom: 10px;">
                          <h4 style="color: #4c7189; font-size: 15px; font-weight: 600;">CMMI咨询 <span style="color: #999; font-weight: 400;">（北京）</span></h4>
                        </div>
                        <p style="color: #333; font-weight: 600; font-size: 16px; margin-bottom: 15px;">常先生</p>
                        <div style="display: flex; flex-direction: column; gap: 12px;">
                          <a href="tel:15724706007" style="background: #4c7189; color: #fff; padding: 12px 20px; border-radius: 8px; text-decoration: none; display: flex; align-items: center; gap: 12px; font-size: 15px; transition: all 0.3s ease;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            15724706007
                          </a>
                          <a href="mailto:chris@huasaiinfo.com" style="background: #f8f9fa; color: #333; padding: 12px 20px; border-radius: 8px; text-decoration: none; display: flex; align-items: center; gap: 12px; font-size: 15px; border: 1px solid #e8e8e8; transition: all 0.3s ease; position: relative; z-index: 1;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#4a6fa5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            chris@huasaiinfo.com
                          </a>
                        </div>
                      </div>
                      
                      <!-- ASPICE咨询 吴先生 -->
                      <div class="contact-item" style="background: #fff; padding: 25px 30px; border-radius: 12px; box-shadow: 0 2px 12px rgba(0,0,0,0.06); border: 1px solid #e8e8e8; transition: all 0.3s ease; flex: 1 1 calc(50% - 10px); min-width: 280px;">
                        <div style="margin-bottom: 10px;">
                          <h4 style="color: #4c7189; font-size: 15px; font-weight: 600;">ASPICE咨询 </h4>
                        </div>
                        <p style="color: #333; font-weight: 600; font-size: 16px; margin-bottom: 15px;">吴先生</p>
                        <div style="display: flex; flex-direction: column; gap: 12px;">
                          <a href="tel:18924597488" style="background: #4c7189; color: #fff; padding: 12px 20px; border-radius: 8px; text-decoration: none; display: flex; align-items: center; gap: 12px; font-size: 15px; transition: all 0.3s ease;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            18924597488
                          </a>
                          <a href="mailto:tony@huasaiinfo.com" style="background: #f8f9fa; color: #333; padding: 12px 20px; border-radius: 8px; text-decoration: none; display: flex; align-items: center; gap: 12px; font-size: 15px; border: 1px solid #e8e8e8; transition: all 0.3s ease; position: relative; z-index: 1;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#4a6fa5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            tony@huasaiinfo.com
                          </a>
                        </div>
                      </div>
                      
                     
                    </div>
                    
                    <div style="margin-top: 35px; text-align: center;">
                      <a href="#contact-form" class="m-button__primary" style="padding: 14px 40px; font-size: 15px;background:#4c7189;">
                        在线留言咨询
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          
          <section class="m-contactus" id="contact-form">
            <div class="m-contactus__inner">
              <div class="container">
                <div class="row">
                  <div class="m-contactus__left">
                    <h3 class="m-contactus__subtitle">在线留言</h3>
                  </div>
                  <div class="m-contactus__content">
                    <?php if ($success_message): ?>
                    <div style="background: #d4edda; color: #155724; padding: 15px; border-radius: 4px; margin-bottom: 20px;">
                      <?php echo $success_message; ?>
                    </div>
                    <?php endif; ?>
                    <?php if ($error_message): ?>
                    <div style="background: #f8d7da; color: #721c24; padding: 15px; border-radius: 4px; margin-bottom: 20px;">
                      <?php echo $error_message; ?>
                    </div>
                    <?php endif; ?>
                    <div class="gf_browser_unknown gform_wrapper gform-theme gform-theme--foundation gform-theme--framework gform-theme--orbital" data-form-theme="orbital" data-form-index="0" id="gform_wrapper_7">
                      <div id="gf_7" class="gform_anchor" tabindex="-1"></div>
                      <div class="gform_heading">
                        <h2 class="gform_title">留言表单</h2>
                        <p class="gform_description"></p>
                        <p class="gform_required_legend">"<span class="gfield_required gfield_required_asterisk">*</span>" 表示必填项</p>
                      </div>
                      <form method="post" action="contact.php" id="contactForm" onsubmit="return validateForm();">
                        <div class="gform-body gform_body">
                          <div id="gform_fields_7" class="gform_fields top_label form_sublabel_below description_below validation_below">
                            <div id="field_7_1" class="gfield gfield--type-text gfield--input-type-text gfield--width-full gfield_contains_required field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible">
                              <label class="gfield_label gform-field-label" for="input_7_1">
                                姓名<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span>
                              </label>
                              <div class="ginput_container ginput_container_text">
                                <input name="name" id="input_7_1" type="text" value="" class="large" aria-required="true" aria-invalid="false" />
                              </div>
                            </div>
                            <div id="field_7_3" class="gfield gfield--type-email gfield--input-type-email gfield--width-full gfield_contains_required field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible">
                              <label class="gfield_label gform-field-label" for="input_7_3">
                                邮箱<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span>
                              </label>
                              <div class="ginput_container ginput_container_email">
                                <input name="email" id="input_7_3" type="email" value="" class="large" aria-required="true" aria-invalid="false" />
                              </div>
                            </div>
                            <div id="field_7_7" class="gfield gfield--type-phone gfield--input-type-phone gfield--width-full field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible">
                              <label class="gfield_label gform-field-label" for="input_7_7">电话</label>
                              <div class="ginput_container ginput_container_phone">
                                <input name="phone" id="input_7_7" type="tel" value="" class="large" aria-invalid="false" />
                              </div>
                            </div>
                            <div id="field_7_5" class="gfield gfield--type-textarea gfield--input-type-textarea gfield--width-full gfield_contains_required field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible">
                              <label class="gfield_label gform-field-label" for="input_7_5">
                                留言内容<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span>
                              </label>
                              <div class="ginput_container ginput_container_textarea">
                                <textarea name="message" id="input_7_5" class="textarea small" aria-required="true" aria-invalid="false" rows="10" cols="50"></textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="gform-footer gform_footer top_label">
                          <input type="submit" id="gform_submit_button_7" class="gform_button button" value="提交" />
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
           <section class="m-contactus" id="contact-form">
            <div class="m-contactus__inner">
              <div class="container">
                <div class="row">
                  <div class="m-contactus__left">
                    <h3 class="m-contactus__subtitle">公司地址</h3>
                  </div>
                  <div class="m-contactus__content">
                    
                    <div class="gf_browser_unknown gform_wrapper gform-theme gform-theme--foundation gform-theme--framework gform-theme--orbital" data-form-theme="orbital" data-form-index="0" id="gform_wrapper_7">
                      <div id="gf_7" class="gform_anchor" tabindex="-1"></div>
                      <div class="gform_heading">
                        <h2 class="gform_title">留言表单</h2>
                        <p class="gform_description"></p>
                        <p class="gform_required_legend">"<span class="gfield_required gfield_required_asterisk">*</span>" 表示必填项</p>
                      </div>
                      <div>深圳市宝安区新安街道兴东社区留仙大道2号汇聚创新园2栋2403室 </div>
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
    <script>
      function validateForm() {
        // 清除之前的错误状态
        document.querySelectorAll('.gfield_error').forEach(function(el) {
          el.classList.remove('gfield_error');
        });
        document.querySelectorAll('.validation_message').forEach(function(el) {
          el.remove();
        });
        
        var isValid = true;
        
        // 验证姓名
        var nameField = document.getElementById('input_7_1');
        if (!nameField.value.trim()) {
          showError(nameField, '请输入姓名');
          isValid = false;
        }
        
        // 验证邮箱
        var emailField = document.getElementById('input_7_3');
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailField.value.trim()) {
          showError(emailField, '请输入邮箱');
          isValid = false;
        } else if (!emailPattern.test(emailField.value.trim())) {
          showError(emailField, '请输入有效的邮箱地址');
          isValid = false;
        }
        
        // 验证留言内容
        var messageField = document.getElementById('input_7_5');
        if (!messageField.value.trim()) {
          showError(messageField, '请输入留言内容');
          isValid = false;
        }
        
        return isValid;
      }
      
      function showError(field, message) {
        var gfield = field.closest('.gfield');
        if (gfield) {
          gfield.classList.add('gfield_error');
          var errorDiv = document.createElement('div');
          errorDiv.className = 'validation_message';
          errorDiv.textContent = message;
          gfield.appendChild(errorDiv);
        }
      }
    </script>
  </body>
</html>
