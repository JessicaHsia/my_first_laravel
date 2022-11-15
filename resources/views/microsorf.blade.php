<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Microsoft-MYSELF0830</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{asset('css/microsoft.css')}}">
    <link rel="stylesheet" href="{{asset('css/microsoft-ham.css')}}">
    <link rel="stylesheet" href="{{asset('css/microsoft-footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/microsoftswiper.css')}}">
    <link rel="stylesheet" href="{{asset('css/microsoft-menu-bar.css')}}">
</head>

<body>
    <nav class="nav" >
        <div class="logo">
            <img src="{{asset('img/microsoft_logo.png')}}" width="108px" height="23px">
        </div>
        <div class="nav_menu">
            <div class="menu_L">
                <div> <a href="#" class="menu" tabindex="1">Microsoft 365</a> </div>
                <div> <a href="#" class="menu" tabindex="1">Teams</a> </div>
                <div> <a href="#" class="menu" tabindex="1">Windows</a> </div>
                <div> <a href="#" class="menu" tabindex="1">Suface</a> </div>
                <div> <a href="#" class="menu" tabindex="1">Xbox</a> </div>
                <div> <a href="#" class="menu" tabindex="1">支援</a> </div>
                <div>
                    <a href="#" class="menu" tabindex="1">
                        <span>更多<i class="fa-solid fa-angle-down"></i></span>
                    </a>
                </div>
            </div>
            <div class="menu_R">
                <div class="ham-small">
                    <input type="checkbox" id="ham-menu-switch" hidden>
                    <label for="ham-menu-switch" class="ham_bar">
                        <a href="#" class="last-menu-item1"></a>
                    </label>
                    <ul class="container-narmal mobile-menu">
                        <li tabindex="1">Microsoft 365</li>
                        <li tabindex="1">Teams</li>
                        <li tabindex="1">Windows</li>
                        <li tabindex="1">Suface</li>
                        <li tabindex="1">Xbox</li>
                        <li tabindex="1">支援</li>
                        <input type="checkbox" id="chevron-soft-swich" class="chevron-swich" hidden>
                        <label for="chevron-soft-swich" class="chevron-label">
                            <li tabindex="1"><span>軟體</span>
                                <span>
                                    <i class="fa-solid fa-angle-down"></i>
                                    <i class="fa-solid fa-angle-up"></i>
                                </span>
                            </li>
                            <ul class="sub-dropdown-menu">
                                <li> <a href="#" tabindex="1">Windows 應用程式</a> </li>
                                <!-- focus如果要作用 html裡需加入tabindex="1"  -->
                                <li> <a href="#" tabindex="1">One Drive</a> </li>
                                <li> <a href="#" tabindex="1">Outlook</a> </li>
                                <li> <a href="#" tabindex="1">Skype</a> </li>
                                <li> <a href="#" tabindex="1">OneNote</a> </li>
                                <li> <a href="#" tabindex="1">Microsoft Teams</a> </li>
                            </ul>
                        </label>
                        <input type="checkbox" id="chevron-2-swich" class="chevron-swich" hidden>
                        <label for="chevron-2-swich" class="chevron-label">
                            <li tabindex="1"><span>個人電腦與設備</span>
                                <span>
                                    <i class="fa-solid fa-angle-down"></i>
                                    <i class="fa-solid fa-angle-up"></i>
                                </span>
                            </li>
                            <ul class="sub-dropdown-menu">
                                <li> <a href="#" tabindex="1">選購 Xbox</a> </li>
                                <li> <a href="#" tabindex="1">電腦配件</a> </li>
                            </ul>
                        </label>
                        <input type="checkbox" id="chevron-3-swich" class="chevron-swich" hidden>
                        <label for="chevron-3-swich" class="chevron-label">
                            <li tabindex="1"> <span>娛樂</span>
                                <span>
                                    <i class="fa-solid fa-angle-down"></i>
                                    <i class="fa-solid fa-angle-up"></i>
                                </span>
                            </li>
                            <ul class="sub-dropdown-menu">
                                <li> <a href="#" tabindex="1">Xbox Game Pass Ultimate</a> </li>
                                <li> <a href="#" tabindex="1">Xbox Live Gold</a> </li>
                                <li> <a href="#" tabindex="1">Xbox與遊戲</a> </li>
                                <li> <a href="#" tabindex="1">電腦遊戲</a> </li>
                                <li> <a href="#" tabindex="1">Windows 遊戲</a> </li>
                            </ul>
                        </label>
                        <input type="checkbox" id="chevron-4-swich" class="chevron-swich" hidden>
                        <label for="chevron-4-swich" class="chevron-label">
                            <li tabindex="1"><span>商務適用</span>
                                <span>
                                    <i class="fa-solid fa-angle-down"></i>
                                    <i class="fa-solid fa-angle-up"></i>
                                </span>
                            </li>
                            <ul class="sub-dropdown-menu">
                                <li> <a href="#" tabindex="1">Microsoft Cloud</a> </li>
                                <li> <a href="#" tabindex="1">Microsoft 安全性</a> </li>
                                <li> <a href="#" tabindex="1">Azure</a> </li>
                                <li> <a href="#" tabindex="1">Dynamics 365</a> </li>
                                <li> <a href="#" tabindex="1">商務用 Microsoft 365</a> </li>
                                <li> <a href="#" tabindex="1">Microsoft 產業</a> </li>
                                <li> <a href="#" tabindex="1">Microsoft Power Platform</a> </li>
                                <li> <a href="#" tabindex="1">Windows 365</a> </li>
                            </ul>
                        </label>
                        <input type="checkbox" id="chevron-5-swich" class="chevron-swich" hidden>
                        <label for="chevron-5-swich" class="chevron-label">
                            <li tabindex="1"><span>開發人員與 IT</span>
                                <span>
                                    <i class="fa-solid fa-angle-down"></i>
                                    <i class="fa-solid fa-angle-up"></i>
                                </span>
                            </li>
                            <ul class="sub-dropdown-menu">
                                <li> <a href="#" tabindex="1">開發人員中心</a> </li>
                                <li> <a href="#" tabindex="1">文件</a> </li>
                                <li> <a href="#" tabindex="1">Microsoft Learn</a> </li>
                                <li> <a href="#" tabindex="1">Microsoft 技術社群</a> </li>
                                <li> <a href="#" tabindex="1">Azure Marketplace</a> </li>
                                <li> <a href="#" tabindex="1">AppSource</a> </li>
                                <li> <a href="#" tabindex="1">Visual Studio</a> </li>
                            </ul>
                        </label>
                        <input type="checkbox" id="chevron-6-swich" class="chevron-swich" hidden>
                        <label for="chevron-6-swich" class="chevron-label">
                            <li tabindex="1"><span>其他</span>
                                <span>
                                    <i class="fa-solid fa-angle-down"></i>
                                    <i class="fa-solid fa-angle-up"></i>
                                </span>
                            </li>
                            <ul class="sub-dropdown-menu">
                                <li> <a href="#" tabindex="1">Microsoft Rewards</a> </li>
                                <li> <a href="#" tabindex="1">免費下載與安全性</a> </li>
                                <li> <a href="#" tabindex="1">教育</a> </li>
                                <li> <a href="#" tabindex="1">禮品卡</a> </li>
                                <li> <a href="#" tabindex="1">Licensing</a> </li>
                            </ul>
                        </label>
                        <li tabindex="1">檢視網站地圖</li>
                    </ul>
                </div>
                <div class="R_btn">
                    <li><a href="/"><i class="fa-regular fa-house"></i></a></li>
                    <div class="btn_menu">
                        <input type="checkbox" id="menu-bar-switch" hidden>
                        <label for="menu-bar-switch" class="menu_bar">
                            <li href="#" class="menu btn_a" tabindex="1">
                                所有Microsoft <i class="fa-solid fa-angle-down"></i>
                            </li>
                        </label>
                        <ul class="menu-bar-all">
                            <ul class="menu-bar-box">
                                <ul class="menu-bar-list">
                                    <li>
                                        <span>軟體</span>
                                    </li>
                                    <li> <a href="#" tabindex="1">Windows應用程式 </a> </li>
                                    <li> <a href="#" tabindex="1">OneDrive </a> </li>
                                    <li> <a href="#" tabindex="1">Outlook </a> </li>
                                    <li> <a href="#" tabindex="1">Skype </a> </li>
                                    <li> <a href="#" tabindex="1">OneNote </a> </li>
                                    <li> <a href="#" tabindex="1">Microsoft Teams </a> </li>
                                </ul>
                                <ul class="menu-bar-list">
                                    <li>
                                        <span>個人電腦和設備</span>
                                    </li>
                                    <li> <a href="#" tabindex="1"> 選購Xbox </a> </li>
                                    <li> <a href="#" tabindex="1"> 電腦配件 </a></li>
                                </ul>
                                <ul class="menu-bar-list">
                                    <li>
                                        <span>娛樂</span>
                                    </li>
                                    <li> <a href="#" tabindex="1"> Xbox Game Pass Ultimate </a> </li>
                                    <li> <a href="#" tabindex="1"> Xbox Live Glod </a> </li>
                                    <li> <a href="#" tabindex="1"> Xbox與遊戲 </a> </li>
                                    <li> <a href="#" tabindex="1"> 電腦遊戲 </a> </li>
                                    <li> <a href="#" tabindex="1"> Windows遊戲 </a> </li>
                                </ul>
                                <ul class="menu-bar-list">
                                    <li>
                                        <span>商務適用</span>
                                    </li>
                                    <li> <a href="#" tabindex="1"> Microsoft Cloud </a> </li>
                                    <li> <a href="#" tabindex="1"> Microsoft 安全性 </a> </li>
                                    <li> <a href="#" tabindex="1"> Azure </a> </li>
                                    <li> <a href="#" tabindex="1"> Dynamics 365 </a> </li>
                                    <li> <a href="#" tabindex="1"> 商務用 Microsoft 365 </a> </li>
                                    <li> <a href="#" tabindex="1"> Microsoft 產業 </a> </li>
                                    <li> <a href="#" tabindex="1"> Microsoft Power Platform </a> </li>
                                    <li> <a href="#" tabindex="1"> Windows 365 </a> </li>
                                </ul>
                                <ul class="menu-bar-list">
                                    <li>
                                        <span>開發人員與IT</span>
                                    </li>
                                    <li> <a href="#" tabindex="1">開發人員中心 </a> </li>
                                    <li> <a href="#" tabindex="1">文件 </a> </li>
                                    <li> <a href="#" tabindex="1">Microsoft Learn </a> </li>
                                    <li> <a href="#" tabindex="1">Microsoft 技術社群 </a> </li>
                                    <li> <a href="#" tabindex="1">Azure Marketplace </a> </li>
                                    <li> <a href="#" tabindex="1">AppSource </a> </li>
                                    <li> <a href="#" tabindex="1">Visual Studio </a> </li>
                                </ul>
                                <ul class="menu-bar-list">
                                    <li>
                                        <span>其他</span>
                                    </li>
                                    <li> <a href="#" tabindex="1">Microsoft Rewards </a> </li>
                                    <li> <a href="#" tabindex="1">免費下載與安全性 </a> </li>
                                    <li> <a href="#" tabindex="1">教育 </a> </li>
                                    <li> <a href="#" tabindex="1">禮品卡 </a> </li>
                                    <li> <a href="#" tabindex="1">Licensing </a> </li>
                                </ul>
                            </ul>
                            <ul class="check-map">
                                <a href="#">
                                    <span> 檢視網站地圖<i class="fa-solid fa-angle-right"></i> </span>
                                </a>
                            </ul>
                        </ul>

                    </div>
                    <div>
                        <a href="#" class="menu btn_b" tabindex="1">
                            <span> 搜尋 </span>
                            <img src="{{asset('img/searchingimg.png')}}" class="searching">
                        </a>
                    </div>
                    <div> <a href="#" class="menu btn_b" tabindex="1">
                            <span> 購物車 </span>
                            <img src="{{asset('img/shopping_cart.png')}}" class="car">
                        </a> </div>
                    <div> <a href="#" class="menu btn_b" tabindex="1">
                            <span> 登入 </span>
                            <img src="{{asset('img/log_in.svg')}}" class="logman"> </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <header>
        <div class="swiper content_1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div>
                        <picture>
                            <source media="(min-width: 1400px)"
                                srcset="{{asset('img/swiperbg1/Highlight-Hero-Surface-Pro-8-with-TypeCover_VP5-1920x600.jpeg')}}">
                            <source media="(min-width: 1084px)"
                                srcset="{{asset('img/swiperbg1/Highlight-Hero-Surface-Pro-8-with-TypeCover_VP4-1399x600.jpeg')}}">
                            <source media="(min-width: 860px)"
                                srcset="{{asset('img/swiperbg1/Highlight-Hero-Surface-Pro-8-with-TypeCover_VP3-1083x600.avif')}}">
                            <source media="(min-width: 540px)"
                                srcset="{{asset('img/swiperbg1/Highlight-Hero-Surface-Pro-8-with-TypeCover_VP2-859x540.avif')}}">
                            <img src="{{asset('img/swiperbg1/Highlight-Hero-Surface-Pro-8-with-TypeCover_VP1-539x440.avif')}}">
                        </picture>
                    </div>
                    <div class="memo memo_bg_1">
                        <div>
                            <h1>Surface Pro 8</h1>
                            <p>運用更大的13吋觸控螢幕、更快的連線，以及提升的速度，成就更多。現在提供 Windows 11。</p>
                        </div>
                        <div><a href="#" class="memo_btn">深入瞭解</a></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div>
                        <picture>
                            <source media="(min-width: 1400px)"
                                srcset="{{asset('img/swiperbg2/Highlight-Surface-Laptop-Go-2-01-M01_VP5-1920x600.webp')}}">
                            <source media="(min-width: 1084px)"
                                srcset="{{asset('img/swiperbg2/Highlight-Surface-Laptop-Go-2-01-M01_VP4-1399x600.webp')}}">
                            <source media="(min-width: 860px)"
                                srcset="{{asset('img/swiperbg2/Highlight-Surface-Laptop-Go-2-01-M01_VP3-1083x600.jpeg')}}">
                            <source media="(min-width: 540px)"
                                srcset="{{asset('img/swiperbg2/Highlight-Surface-Laptop-Go-2-01-M01_VP2-859x540.jpeg')}}">
                            <img src="{{asset('img/swiperbg2/Highlight-Surface-Laptop-Go-2-01-M01-VP1-539x440.jpeg')}}">
                        </picture>
                    </div>
                    <div class="memo memo_bg_2">
                        <div><span>新上市</span></div>
                        <h1>Surface Laptap Go 2</h1>
                        <p>外型時尚的筆記型電腦筆記型電腦配備12.4吋吋觸控螢幕、絕佳的打字體驗，以及改良的HD相機</p>
                        <div><a href="#" class="memo_btn">深入瞭解</a></div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </header>

    <div class="container">
        <div class="content_2">
            <div class="content_2box content_2box-1">
                <img src="{{asset('img/container_2_first.webp')}}" alt="">
                <a href="#">選擇你的 Microsoft 365</a>
            </div>
            <div class="content_2box content_2box-2">
                <img src="{{asset('img/container_2_middle.webp')}}" alt="">
                <a href="#">選購 Surface 裝置</a>
            </div>
            <div class="content_2box content_2box-3">
                <img src="{{asset('img/container_2_first.webp')}}" alt="">
                <a href="#">取得 Windows 11</a>
            </div>
        </div>
        <div class="content_3">
            <div class="content_3box">
                <img src="{{asset('img/container_3_box1.webp')}}" alt="">
                <div class="content_3box_text">
                    <h2>Microsoft 365</h2>
                    <p>進階版 Office 應用程式、額外的雲端儲存空間、進階安全性等功能，全都在一個方便的訂閱中。</p>
                    <div class="box3_link_a">
                        <a href="#">適合一人使用 <i class="fa-solid fa-angle-right"></i> </a>
                        <a href="#"> 最多可供6人使用 <i class="fa-solid fa-angle-right"></i> </a>
                    </div>
                </div>
            </div>
            <div class="content_3box">
                <img src="{{asset('img/container_3_box2.webp')}}" alt="">
                <div class="content_3box_text">
                    <h2>Surface Laptop 4</h2>
                    <p>運用完美結合時尚外型、超薄設計、多工速度和增強效能的裝置，一手包辦。</p>
                    <div class="box3_link_b">
                        <a href="#">立即選購 <i class="fa-solid fa-angle-right"></i> </a>
                    </div>
                </div>
            </div>
            <div class="content_3box">
                <img src="{{asset('img/content_3_box3.png')}}" alt="">
                <div class="content_3box_text">
                    <h2>Microsoft Edge</h2>
                    <p>在您瀏覽時提供世界級的效能，以及更多的隱私、更充足的生產力與更高的價值。</p>
                    <div class="box3_link_b">
                        <a href="#">立即下載 <i class="fa-solid fa-angle-right"></i> </a>
                    </div>
                </div>
            </div>
            <div class="content_3box">
                <img src="{{asset('img/container_3_box4.webp')}}" alt="">
                <div class="content_3box_text">
                    <h2>PC Game Pass</h2>
                    <p>解鎖 100 多款精彩遊戲和 EA Play，而且首月只需 NT$30。 此優惠僅適用於新訂閱者。</p>
                    <div class="box3_link_b">
                        <a href="#">立即加入 <i class="fa-solid fa-angle-right"></i> </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="content_4">
            <div class="content_4_picture">
                <picture>
                    <source media="(min-width: 1400px)"
                        srcset="{{asset('img/container_4/container_3_box2 1596x600.webp')}}">
                    <source media="(min-width: 1084px)"
                        srcset="{{asset('img/container_4/gldn-Soft-Hero-OneDriveCampaignRefresh-2-VP4-1260x600')}}">
                    <source media="(min-width: 860px)"
                        srcset="{{asset('img/container_4/gldn-Soft-Hero-OneDriveCampaignRefresh-2-VP3-1083x600.jpeg')}}">
                    <source media="(min-width: 540px)"
                        srcset="{{asset('img/container_4/gldn-Soft-Hero-OneDriveCampaignRefresh-2-VP2-859x540.jpeg')}}">
                    <img src="{{asset('img/container_4/gldn-Soft-Hero-OneDriveCampaignRefresh-2-VP1-539x440.jpeg')}}">
                </picture>
            </div>
            <div class="content_4_memo">
                <div>
                    <h1>Microsoft OneDrive</h1>
                </div>
                <p>將檔案和相片儲存到 OneDrive，即可隨時隨地從任何裝置存取</p>
                <div><a href="#" class="memo_btn">深入瞭解</a></div>
            </div>
        </div>
        <div class="content_5_tittle">
            <h1>適用於商務</h1>
        </div>
        <div class="content_5">
            <div class="content_5box">
                <img src="{{asset('img/container_5_box1.webp')}}" alt="">
                <div class="content_5box_L">
                    <div class="newup">
                        <span>新上市</span>
                    </div>
                    <h2>Surface Laptop Go 2 商務版</h2>
                    <p>外型時尚、方便攜帶的筆記型電腦配備絕佳的打字體驗、Windows 11 專業版和專業級效能。</p>
                    <div class="box5_link">
                        <a href="#">深入瞭解 <i class="fa-solid fa-angle-right"></i> </a>
                    </div>
                </div>
            </div>
            <div class="content_5box">
                <img src="{{asset('img/container_5_box2.webp')}}" alt="">
                <div class="content_5box_R">
                    <h2>免費取得 Microsoft Teams</h2>
                    <p>線上會議、聊天和共用雲端儲存空間，盡在一處。</p>
                    <div class="box5_link">
                        <a href="#">免費註冊 <i class="fa-solid fa-angle-right"></i> </a>
                    </div>
                </div>
            </div>
            <div class="content_5box">
                <img src="{{asset('img/container_5_box3.webp')}}" alt="">
                <div class="content_5box_R">
                    <h2>Microsoft 365 商務版</h2>
                    <p>透過功能強大的應用程式提高生產力、聯繫和安全，始終領先一步。</p>
                    <div class="box5_link">
                        <a href="#">立即選購 <i class="fa-solid fa-angle-right"></i> </a>
                    </div>
                </div>
            </div>
            <div class="content_5box">
                <img src="{{asset('img/container_3_box4.webp')}}" alt="">
                <div class="content_5box_R">
                    <h2>商務用 Windows 11 登場</h2>
                    <p>專為混合式辦公而設計。 為員工帶來實用性。 為 IT 帶來一致性。 為所有人帶來安全性。</p>
                    <div class="box5_link">
                        <a href="#">深入瞭解 <i class="fa-solid fa-angle-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content_6">
            <div>
                <span>關注 Microsoft</span>
                <a href="https://www.facebook.com/MicrosoftTaiwan/"> <i class="fa-brands fa-facebook-f"></i> </a>
                <a href="https://www.youtube.com/user/MicrosoftTaiwan"> <i class="fa-brands fa-youtube"></i> </a>
            </div>
        </div>
        <div class="go-top">
            <a href="#"><i class="fa-solid fa-arrow-up"></i>回到首頁</a>
        </div>
    </div>
    <footer class="footer-all">
        <div class="footermenu">
            <div class="footerbox box_1">
                <p>最新動向</p>
                <a href="#">Microsoft 365</a>
                <a href="#">Surface Go</a>
                <a href="#">Surface book 2</a>
                <a href="#">Surface pro</a>
                <a href="#">Windows 11 應用程式</a>
            </div>
            <div class="footerbox box_2">
                <p>Microsoft store</p>
                <a href="#">帳戶設定檔</a>
                <a href="#">下載中心</a>
                <a href="#">Microsoft Store 支援</a>
                <a href="#">退貨/退款</a>
                <a href="#">訂單追蹤</a>
            </div>
            <div class="footerbox box_3">
                <p>教育</p>
                <a href="#">Microsoft 教育</a>
                <a href="#">教育裝置</a>
                <a href="#">Microsoft Teams 教育版</a>
                <a href="#">Microsoft 365 教育版</a>
                <a href="#">Office 教育版</a>
                <a href="#">教育工作者訓練和發展</a>
                <a href="#">學生和家長優惠</a>
                <a href="#">Azure 學生版</a>
            </div>
            <div class="footerbox box_4">
                <p>商務</p>
                <a href="#">Microsoft Cloud</a>
                <a href="#">Microsoft 安全性</a>
                <a href="#">Azure</a>
                <a href="#">Dynamics 365</a>
                <a href="#">Microsoft 365</a>
                <a href="#">Microsoft Advertising</a>
                <a href="#">Microsoft 產業</a>
                <a href="#">Microsoft Teams</a>
            </div>
            <div class="footerbox box_5">
                <p>開發人員與IT</p>
                <a href="#">開發人員中心</a>
                <a href="#">文件</a>
                <a href="#">Microsoft Learn</a>
                <a href="#">Microsoft 技術社群</a>
                <a href="#">Azure Marketplace</a>
                <a href="#">AppSource</a>
                <a href="#">Microsoft Power Platform</a>
                <a href="#">Visual Studio</a>
            </div>
            <div class="footerbox box_6">
                <p>公司</p>
                <a href="#">人才招募</a>
                <a href="#">公司新聞</a>
                <a href="#">Microsoft 隱私權</a>
                <a href="#">投資者</a>
                <a href="#">永續性</a>
            </div>
        </div>
        <div class="footerbar">
            <div>
                <a href="#" class="language"> <img src="{{asset('img/earth.png')}}" alt=""> <p>中文(台灣)</p>  </a>
            </div>
            <div class="ifro-bar">
                <a href="#">聯絡 Microsoft</a>
                <a href="#">隱私權</a>
                <a href="#">使用規定</a>
                <a href="#">商標</a>
                <a href="#">有關我們的廣告訊息</a>
                <p>© Microsoft 2022</p>
            </div>
        </div>
    </footer>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".content_1", {
            loop: true,
            cssMode: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>


</body>

</html>
