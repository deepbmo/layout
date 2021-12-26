<?php
/**
 * 이 파일은 강원네트워크 연동모듈의 일부입니다. (http://www.coursemos.kr)
 *
 *
 * @file /modules/knc/templets/default/externals/index.php
 * @author Eunseop Lim (eslim@naddle.net)
 * @license MIT License
 * @version 3.0.0
 * @modified 2021. 12. 10.
 */
if (defined('__IM__') == false) exit;
$IM->addHeadResource('style',$Templet->getDir().'/styles/style.css');
$IM->addHeadResource('script',$Templet->getDir().'/scripts/script.js');
?>

<main class="index">
    <div class="visual">
        <?php $IM->getWidget('banner.list')->setTemplet('@index')->setValue('bid','knc')->setValue('cache',60)->doLayout(); ?>
        <div class="container">
            <div class="login">
                <?php $IM->getWidget('member.login')->setTemplet('@index')->doLayout(); ?>
            </div>
            <div class="link">
                <a href="#" class="entrance">교육과정리스트</a>
                <a href="#" class="faq">공동학습시스템</a>
                <a href="#" class="qna">설문조사</a>
            </div>
        </div>
    </div>

    <div class="container">
        <section class="notice_box">
            <article class="notice">
                <div class="toolbar">
                    <ul data-role="tab" data-name="board">
                        <li data-tab="notice"><button type="button">공지사항</button></li>
                    </ul>
                    <div class="btn_group">
                        <button type="button" data-action="prev" class="prev"><i class="xi xi-angle-left"></i></button>
                        <button type="button" data-action="next" class="next"><i class="xi xi-angle-right"></i></button>
                        <a href="/ko/community">더보기 <i class="mi mi-plus-thin"></i></a>
                    </div>
                </div>
                <div data-role="tab" data-name="board">
                    <div data-tab="notice">
                        <?php $IM->getWidget('boarduniv.recently')->setTemplet('@index')->setValue('bid','knc_notice')->setValue('type','post')->setValue('count',3)->setValue('cache',40)->doLayout(); ?>
                    </div>
                </div>
            </article>
        </section> 

        <section class="application_status">
            <article class="program">
                <div class="toolbar">
                    <ul data-role="tab" data-name="program">
                        <li data-tab="status"><button type="button">교육과정<br>신청 현황</button></li>
                    </ul>
                    <div class="btn_group">
                        <button type="button" data-action="prev" class="prev"><i class="xi xi-angle-left"></i></button>
                        <button type="button" data-action="next" class="next"><i class="xi xi-angle-right"></i></button>
                        <a href="/ko/community">더보기 <i class="mi mi-plus-thin"></i></a>
                    </div>
                </div>
                <div data-role="tab" data-name="program">
                    <div data-tab="status">
                        <?php $IM->getWidget('knc.program_status')->setTemplet('@index')->setValue('bid','knc_notice')->setValue('type','post')->setValue('count',3)->setValue('cache',40)->doLayout(); ?>
                    </div>
                </div>
            </article>
        </section>

        <section class="info">
            <ul>
                <li>교육문의<br />및 안내</li>
                <li class="center_tel">
                    <p>033-250-8788</p>
                    <span class="info">평일:09:00~ 18:00</span><span>점심시간: 12:00 ~ 13:00</span>
                </li>
                <li class="center_mail">
                    <a href="mailto:ctl@kangwon.ac.kr"><i class="fa fa-envelope-o"></i>edu@kangwon.ac.kr</a>
                </li>
            </ul>
        </section>
    </div>
</main>