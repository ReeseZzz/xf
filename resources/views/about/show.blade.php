@extends('layouts.app')

@section('title')@endsection

@section('content')
    <main role="main">
        <div class="container py-md-4">
            <div class="row about">
                <h2 class="section-title">企业介绍</h2>
                <h3 class="sub-title">COMPANY PROFILE</h3>
                <section class="desc">
                    武汉安源消防安全设备有限公司成立于2005年，注册资金5200万。公司专门从事消防、电子与智能化、装饰装修及机电工程的设计、施工；消防设施技术检测、维修保养；公司下设消防设施维修（护）分公司及消防器材维修部；具有标准化消防器材维修车间及先进的维修设备，维修部是湖北省第一家通过省消防总队验收合格企业；本着过硬的施工质量，公司在2008年顺利通过ISO9001:2008国际质量管理体系认证，认证号03416Q21172ROS；并通过省建设厅安全生产认定，核发安全生产许可证；2017年公司通过全体员工努力获得江汉区“十佳企业”称号。公司聚集了一批高素质的专业人才,建立了一支优秀的员工团队，现有在编各类专业技术人员96人            
                </section>
                <section class="desc">
                    <img src="" class="desc-img" alt="">
                </section>
                <h2 class="section-title">组织架构</h2>
                <h3 class="sub-title">QRGANIZATIONAL STRYCYURE</h3>
                <section class="desc">
                    <img src="" class="desc-img" alt="">
                </section>
                <h2 class="section-title">发展历程</h2>
                <h3 class="sub-title">DEVELOPMENT HISTORY</h3>
                <section class="desc-history">
                    <span class="dot top">
                        <img src="" class="img" alt="">            
                        <span class="year">2005</span>
                        <span class="sub-title">公司创立</span>
                        <span class="content">公司创立之初，主要以销售消防器材，灭火器维修，安防产品、安装自动喷淋系统等服务为主。</span>
                    </span>                        
                    <span class="dot bottom">
                        <img src="" class="img" alt="">            
                        <span class="year">2009</span>
                        <span class="sub-title">持续发展</span>
                        <span class="content">经历4年稳健的发展，销售团队扩展到30人，业绩逐年增加，在灭火器维修维保方面领先同行，注册资本变更为500万元。</span>
                    </span>                        
                    <span class="dot top">
                        <img src="" class="img" alt="">            
                        <span class="year">2011</span>
                        <span class="sub-title">高速发展</span>
                        <span class="content">公司经营业务范围扩展，由创立最初的销售主营业务，扩展至消防工程施工，楼宇智能化管理工程，装饰工程，机电设备工程设计与施工等。</span>
                    </span>                        
                    <span class="dot bottom">
                        <img src="" class="img" alt="">            
                        <span class="year">2015</span>
                        <span class="sub-title">逐步完善</span>
                        <span class="content">公司注册资本由500万元变更为1500万元，并在开展业务中获得相关资质及荣誉。</span>
                    </span>    
                    <span class="dot top">
                        <img src="" class="img" alt="">            
                        <span class="year">2018</span>
                        <span class="sub-title">趋于平稳</span>
                        <span class="content">公司注册资本由1500万变更为5200万元，长期合作的单位达到数百家，拥有诸多相关业务一级资质。</span>
                    </span>                      
                </section>
                <h2 class="section-title">荣誉资质</h2>
                <h3 class="sub-title">HONORARY QUALIFICATION</h3>
                <section class="desc">
                    安源消防获得国家高新技术企业荣誉，是全国质量信得过诚信单位，公司拥有火灾试验检测基地，气体灭火产品研发试验中心和泡沫灭火产品研发生产基地，先进的检验检测设备仪器，完善的检测手段及专业的检测队伍，公司致力于消防技术领域的研究突破，获得国家发明专利10多项，产品广泛应用于移动通讯、轨道交通、隧道交通、能源电力、石油化工、档案馆、机场、造船、银行、医院、烟草、消防部队等重点单位。
                </section>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="" class="honor" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="" class="honor" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="" class="honor" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="" class="honor" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="" class="honor" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>

    </main>

@endsection
@section('js')
<script src="https://cdn.bootcss.com/Swiper/4.5.0/js/swiper.min.js"></script>
    <script>
       $(function () {
            var mySwiper = new Swiper ('.swiper-container', {
                slidesPerView: 'auto',
                spaceBetween: 40,
                // 如果需要前进后退按钮
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            
            })        
       })
    </script>
@endsection


