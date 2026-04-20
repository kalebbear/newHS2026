      <style>
    /* 1200-1500px 响应式调整 - 隐藏中间导航的联系按钮 */
    @media (min-width: 1200px) and (max-width: 1500px) {
      
      .l-header__center .m-navcontact {
        display: none;
      }
    }
   
    /* 移动端隐藏右侧座机按钮（使用汉堡菜单） */
    @media (max-width: 780px) {
      .l-header__right .button__secondary2 {
        display: none;
      }
    }
    /* 座机按钮图标左移 */
    .l-header__right .button__secondary2::before {
      left: 7px !important;
    }
  </style>
      <header class="l-header">
        <div class="container">
          <div class="row">
            <div class="l-header__inner">
              <div class="l-header__left">
                <a
                  href="index.php"
                  title="深圳华赛信息咨询有限公司"
                  class="l-header__logo-text"
                  style="text-decoration: none; display: flex; flex-direction: column; align-items: stretch; justify-content: center; line-height: 1.4;"
                >
                  <span class="logo-text-cn" style="font-size: 18px; font-weight: 700; white-space: nowrap; text-align: justify; text-align-last: justify;">深圳<span class="logo-highlight" style="color: #c41e3a;">华赛</span>信息咨询有限公司</span>
                  <span class="logo-text-en" style="font-size: 11px; letter-spacing: 0.5px; white-space: nowrap; text-align: justify; text-align-last: justify; margin-top: 3px;">Shenzhen Huasai Information Consulting Co.,Ltd</span>
                </a>
              </div>
              <div class="l-header__center">
                <div class="l-header__nav">
                  <nav class="l-mainnav">
                    <nav
                      class="nav-primary"
                      aria-label="Main Navigation (Primary Navigation EN)"
                    >
                      <div
                        class="menu-main-navigation-primary-navigation-en-container"
                      >
                        <ul
                          id="menu-main-navigation-primary-navigation-en"
                          class="m-mainnav"
                        >
                          <li
                            id="menu-item-1575"
                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children level-0 menu-item-1575"
                          >
                            <a href="about.php" aria-current="page">关于华赛</a>
                            <ul class="sub-menu">
                              <li
                                id="menu-item-5559"
                                class="menu-item menu-item-type-post_type menu-item-object-page level-1 menu-item-5559"
                              >
                                <a href="about.php"
                                  >华赛简介</a
                                >
                              </li>
                              <li
                                id="menu-item-2907"
                                class="menu-item menu-item-type-post_type menu-item-object-page level-1 menu-item-2907"
                              >
                                <a href="team.php">咨询团队</a>
                              </li>
                             
                              <li
                                id="menu-item-1448"
                                class="menu-item menu-item-type-post_type menu-item-object-page level-1 menu-item-1448"
                              >
                                <a href="customer.php">华赛客户</a>
                              </li>
                              <li
                                class="menu-item menu-item-type-post_type menu-item-object-page level-1"
                              >
                                <a href="honor.php">华赛荣耀</a>
                              </li>
                              
                              </li>
                            </ul>
                          </li>
                          <li
                            id="menu-item-1133"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children level-0 menu-item-1133"
                          >
                            <a href="CMMIImplementation.php">CMMI</a>
                            <ul class="sub-menu">
                              <li
                                id="menu-item-5662"
                                class="menu-item menu-item-type-post_type menu-item-object-page level-1 menu-item-5662"
                              >
                                <a href="CMMIImplementation.php"
                                  >CMMI实施</a
                                >
                              </li>
                              <li
                                id="menu-item-5377"
                                class="menu-item menu-item-type-post_type menu-item-object-page level-1 menu-item-5377"
                              >
                                <a href="cmmi.php"
                                  >CMMI评估认证</a
                                >
                              </li>
                             
                            </ul>
                          </li>
                          <li
                            id="menu-item-1452"
                            class="menu-item menu-item-type-post_type menu-item-object-page level-0 menu-item-1452"
                          >
                            <a href="aspice.php">ASPICE</a>
                          </li>
                          <li
                            id="menu-item-1452"
                            class="menu-item menu-item-type-post_type menu-item-object-page level-0 menu-item-1452"
                          >
                            <a href="process-consulting.php">流程落地咨询</a>
                          </li>
                          
                          <li
                            id="menu-item-1452"
                            class="menu-item menu-item-type-post_type menu-item-object-page level-0 menu-item-1452"
                          >
                            <a href="ai-empowerment.php">AI赋能</a>
                          </li>
                          
                          <li
                            id="menu-item-1212"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children level-0 menu-item-1212"
                          >
                            <a href="news.php">资讯</a>
                            <ul class="sub-menu">
                              
                              <li
                                class="menu-item menu-item-type-post_type menu-item-object-page level-1"
                              >
                                <a href="news.php">华赛新闻</a>
                              </li>
                              <li
                                class="menu-item menu-item-type-post_type menu-item-object-page level-1"
                              >
                                <a href="hstools.php">华赛工具</a>
                              </li>
                              <li
                                class="menu-item menu-item-type-post_type menu-item-object-page level-1"
                              >
                                <a href="hsdocs.php">华赛文库</a>
                              </li>
                            </ul>
                          </li>
                          
                        </ul>
                      </div>
                    </nav>
                  </nav>
                  <div class="m-navcontact">
                    <div class="m-navcontact__text"></div>
                    <div class="m-navcontact__buttons">
                      <a
                        href="tel:0755-29656825"
                        title="DE: +0755-29656825 "
                        class="m-button__secondary"
                        data-icon-left="phone"
                      >
                        0755-29656825
                      </a>
                      <a
                        href="tel:18924597488"
                        title="CH: 18924597488"
                        class="m-button__secondary"
                        data-icon-left="phone"
                      >
                        CH: 18924597488
                      </a>
                      <a
                        href="mailto:tony@huasaiinfo.com"
                        title="tony@huasaiinfo.com"
                        class="m-button__secondary"
                        data-bg="lightgrey"
                        data-icon-left="mail"
                      >
                        tony@huasaiinfo.com
                      </a>
                      <a
                        href="contact.php"
                        title="Contact form"
                        class="m-button__secondary"
                        data-bg="lightgrey"
                        data-icon-right="arrow-with-dash-right"
                      >
                        联系我们
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="l-header__right">
                <div class="l-header__contact">
                  <a
                    href="tel:0755-29656825"
                    title="座机"
                    class="m-button__secondary button__secondary2"
                    data-bg="lightgrey"
                    data-icon-left="phone"
                    style="margin-right: 5px;padding-left:25px;padding-right:5px;"
                  >
                    0755-29656825
                  </a>
                  <a
                    href="contact.php"
                    title="Contact"
                    class="m-button__primary"
                    data-icon-right="arrow-with-dash-right"
                    
                    ><span class="mobile"
                      ><svg
                        width="16"
                        height="16"
                        viewBox="0 0 22 22"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M21.5262 8.28532C20.8492 8.63807 12.5231 12.9818 12.1076 13.1973C11.693 13.4136 11.4011 13.4419 11 13.4419C10.5981 13.4419 10.3078 13.4136 9.89154 13.1973L0.473847 8.28532C-0.00422946 8.03739 1.29617e-06 8.32858 1.29617e-06 8.55321V17.4969C1.29617e-06 18.0094 0.682847 18.6667 1.21254 18.6667H20.7875C21.3172 18.6667 22 18.0086 22 17.4977V8.55321C22 8.32858 22.0042 8.03739 21.5262 8.28532ZM0.691978 5.28394L9.88799 10.0485C10.1962 10.2082 10.5961 10.2857 10.9994 10.2857C11.4018 10.2857 11.8017 10.2082 12.1108 10.0485L21.3085 5.28394C21.9079 4.97405 22.4751 4 21.3747 4H0.624903C-0.474612 4 0.091702 4.97405 0.691128 5.28394"
                          fill="white"
                        /></svg></span
                    ><span class="desk">联系我们</span></a
                  >
                </div>
                <div class="l-header__hamburger">
                  <button class="hamburger hamburger--spin" type="button">
                    <span class="hamburger-box">
                      <span class="hamburger-inner"></span>
                    </span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>