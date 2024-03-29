<?php
//white_domain_list
//白名单机制...，白名单是
//@date 2018年12月23日
//value=-1,代表失效本条规则，暂只支持单域名（针对引入外部白名单时的精确控制）,当处于strict_mode时，排除此key，单条关闭strict_mode
//value=0,代表仅加白单条域名
//value=1,代表其下级域名全部加白（例如3级域名，则其4级子域名全部加白）
//value=2,代表仅加白主域名及其子域名，即如果是主域名，加白全部，如果是子域名，加白命中的单条
// Formatter: https://www.duplichecker.com/php-formatter

return [
    "cdn-thumb.fds.api.xiaomi.com" => 0,
    "bce.baidu.com" => 0,
    "b.bdstatic.com" => 0,
    "gss0.bdstatic.com" => 0, //百度贴吧头像
    "googleadapis.l.google.com" => 0, //解决google字体下载异常
    "gstaticadssl.l.google.com" => 0, //解决google字体下载异常
    "gvt2.com" => 1, //gvt2，安卓系统相关
    "wangbase.com" => 1, //阮一峰同志的博客图片显示
    "l.qq.com" => 0, //解决腾讯视频无法播放
    "dldir1.qq.com" => 0, //qq下载安装包路径
    "cgi.connect.qq.com" => 0, //qq互联
    "stdl.qq.com" => 0, //qq浏览器
    "wup.imtt.qq.com" => 0, //qq浏览器书签
    "pacaio.match.qq.com" => 0, //腾讯网qq登录
    "gia.jd.com" => 0, //京东滑动验证码
    "edge.yunjiasu.com" => 0, //百度云加速javascript快速加载功能
    "cd.bendibao.com" => 0, //成都本地宝
    "m.qpic.cn" => 0, // qq，微信，QQ空间等用到的静态资源域名
    "ipify.org" => 1, // 获得公网 IP
    "pass.1688.com" => 0, // 阿里巴巴网站访问不正常
    "cedexis.net" => 0, // windowsupdate CNAME
    "y0.cn" => 0, // 短网址服务，涉及本次丁香医生实时疫情页面 http://y0.cn/sari
    "click.taobao.com" => 0, //淘宝粉丝福利购
    "t1.baidu.com" => 0, //百度图片自有平台
    "t2.baidu.com" => 0, //百度图片自有平台
    "t3.baidu.com" => 0, //百度图片自有平台
    "t4.baidu.com" => 0, //百度图片自有平台
    "t5.baidu.com" => 0, //百度图片自有平台
    "t6.baidu.com" => 0, //百度图片自有平台
    "t7.baidu.com" => 0, //百度图片自有平台
    "t8.baidu.com" => 0, //百度图片自有平台
    "t9.baidu.com" => 0, //百度图片自有平台
    "t10.baidu.com" => 0, //百度图片自有平台
    "t11.baidu.com" => 0, //百度图片自有平台
    "t12.baidu.com" => 0, //百度图片自有平台
    "bytedance.com" => 0, //字节跳动
    "tbskip.taobao.com" => 1, //淘宝订单搜索相关
    "wl.jd.com" => 0, //修复京东pc首页加载异常
    "tanx.com" => 0, //饿了么店铺异常
    "promotion.aliyun.com" => 0, //阿里云控制台
    "rarbg.to" => 0, //BT站
    "rarbgprx.org" => 0, //BT站
    "rarbgmirror.org" => 0, //BT站
    "rarbgmirror.com" => 0, //BT站
    "rarbgmirrored.org" => 0, //BT站
    "rarbgaccess.org" => 0, //BT站
    "rarbgp2p.org" => 0, //BT站
    "rarbgproxied.org" => 0, //BT站
    "rarbgproxy.org" => 0, //BT站
    "rarbgto.org" => 0, //BT站
    "rarbgway.org" => 0, //BT站
    "rarbg2019.org" => 0, //BT站
    "rarbg2020.org" => 0, //BT站
    "rarbg2021.org" => 0, //BT站
    "gsp0.baidu.com" => 0, //百度贴吧相关
    "gsp1.baidu.com" => 0, //百度贴吧相关
    "gsp2.baidu.com" => 0, //百度贴吧相关
    "gsp3.baidu.com" => 0, //百度贴吧相关
    "sp0.baidu.com" => 0, //百度翻译资源
    "sp2.baidu.com" => 0, //百度翻译资源
    "c0.ifengimg.com" => 0, //凤凰网视频异常
    "7moor.com" => 0, //山姆会员客服异常
    "v.smtcdns.net" => 0, //影响部分B站直播
    "gameone.com" => 0, //影响部分B站直播
    "ultraiso.net" => 1, //软碟通官网
    "mmstat.com" => 0, //修复优酷视频显示禁用了cookie
    "log.mmstat.com" => 0, //修复优酷视频显示禁用了cookie
    "adm.10jqka.com.cn" => 0, //修复同花顺的tips异常
    "cps.kaola.com" => 0, //考拉的cps，放行
    "iteye.com" => 0, //某编程网站
    "dl.360safe.com" => 0, //360驱动下载
    "resolver.msg.xiaomi.net" => 0, //小爱音箱语音识别
    "api.sec.miui.com" => 0, //miui自带骚扰拦截相关
    "iface2.iqiyi.com" => 0, //爱奇艺 相关视频推荐
    "apm3.music.163.com" => 0, //网易云音乐
    "mbd.baidu.com" => 0, //百度百家号
    "suo.im" => 0, //短网址服务
    "hinet.net" => 0,
    "hubpd.com" => 0, //党媒平台网址
    "i.niupic.com" => 0, //免费图床地址
    "api-game.meizu.com" => 0, //魅族商店更新游戏
    "image.uczzd.cn" => 0, //uc头条的图片 #67
    "dg.k.jd.com" => 0, //京东不能跳转app
    "orbit.jd.com" => 0, //京东不能跳转app
    "kepler.jd.com" => 0, //京东不能跳转app
    "widget.weibo.com" => 0, //微博误杀
    "sailthru.com" => 0, //误杀epicgame.com，因CNAME #73
    "t1.58cdn.com.cn" => 0, // 58同城cdn #75
    "t2.58cdn.com.cn" => 0, // 58同城cdn #75
    "t3.58cdn.com.cn" => 0, // 58同城cdn #75
    "ddns.net" => 0, // #76
    "pushbullet.com" => 0, // #77
    "now.sh" => 0, // #78
    "zimuku.la" => 0, // #84
    "qihucdn.com" => 0, // #89
    "sqimg.qq.com" => 0, // #90
    "haohuo.snssdk.com" => 0, // 抖音订单列表
    "acs.m.taobao.com" => 0, // #92
    "perfops.net" => 0, // #96
    "msg.video.qiyi.com" => 0, // #93
    "img.zuoyebang.cc" => 0, // 作业帮拍照搜题
    "data.video.iqiyi.com" => 0, // 爱奇艺电视投屏
    "cp81.ott.cibntv.net" => 0, // CIBN云视听异常 #107
    "sj.uukanshu.com" => 0, // 误杀 #110
    "e.shifen.com" => 0, // 百度的某个cname域名，误杀严重
    "gvt1.com" => 0, // google play #117
    "apiwz.midukanshu.com" => 0, // #120
    "api.jr.mi.com" => 0, // #121
    "graph.facebook.com" => 0,
    "image.box.xiaomi.com" => 0, // #124
    "niuza.com" => 1, // #124
    "sourl.cn" => 0, // #123
    "pp.ua" => 0, // #131
    "search.video.iqiyi.com" => 0, // #132
    "wanproxy.127.net" => 0, // #137
    "shouji.360.cn" => 0, // #136
    "ae01.alicdn.com" => 0, // #142
    // 'pingjs.qq.com' => 0, // #143
    "shifen.com" => 0, // 百度的cname
    "f10.baidu.com" => 0, // 百度公众号图片
    "f11.baidu.com" => 0, // 百度公众号图片
    "f12.baidu.com" => 0, // 百度公众号图片
    "bj.bcebos.com" => 0, // 百度云产品
    "kingsoft.com" => 0, // 金山软件
    "top.baidu.com" => 0, // 百度风云榜
    "aiseet.atianqi.com" => 0, // #147
    "data.bilibili.com" => 0, // #148
    "get3.adobe.com" => 0, // #152
    "ex.qq.com" => 0, // #153
    "1sapp.com" => 0, // #156
    "dyn.ithome.com" => 0, // #157
    "sf6-ttcdn-tos.pstatp.com" => 0, // #159
    "api.tv.sohu.com" => 0, // 搜狐视频win app版不能使用
    "ip2location.com" => 0, // #163
    "livere.com" => 0, // #170
    "ucan.25pp.com" => 0, // #171
    "privateinternetaccess.com" => 0, // #174
    "shopify.com" => 0, // #179
    "co.in" => 0, //https://github.com/nextdns/metadata/issues/364
    "91mobiles.com" => 0, // #215
    "m.1234567.com.cn" => 0, // #213
    "woniu.com" => 0, // #227
    "du.163.com" => 0, // #229
    "zaloapp.com" => 0, // #230
    "manhuachi.com" => 0, // #238
    "push2.eastmoney.com" => 0, // #239
    "slashdot.org" => 0, // #242
    "iwx.mail.qq.com" => 0, // #243
    "ename.net" => 0, // #246
    "api.iplay.163.com" => 0, // #247
    "minorshort.weixin.qq.com" => 0, // 微信滑动验证码
    "pusher.com" => 0, // #248
    "bluehost.com" => 0, // #249
    "hosting24.com" => 0, // #252
    "pdc.micloud.xiaomi.net" => 0, // #256
    "valf.atm.cp31.ott.cibntv.net" => 0, // #257
    "sf1-ttcdn-tos.pstatp.com" => 0, // #258
    "sf3-ttcdn-tos.pstatp.com" => 0, // #258
    "upload.cc" => 0, // #262
    "yql.yahoo.com" => 0, // #263
    "naifei.shop" => 0, // #267
    "tagtic.cn" => 0, // #266
    "settings-win.data.microsoft.com" => 0, // #268
    "db5-eap.settings-win.data.microsoft.com.akadns.net" => 0, // #268
    "db5.settings-win.data.microsoft.com.akadns.net" => 0, // #268
    "geo.settings-win.data.microsoft.com.akadns.net" => 0, // #268
    "printfriendly.com" => 0, // #272
    "cnnic.cn" => 0, #274
    "ss.cnnic.cn" => 0, #274
    "www.cnnic.cn" => 0, #274
    "cnnic.net" => 0, #274
    "www.cnnic.net" => 0, #274
    "cnnic.net.cn" => 0, #274
    "www.cnnic.net.cn" => 0, #274
    "c.gj.qq.com" => 0, #273
    "isee.weishi.qq.com" => 0, #270
    "direct.wap.zol.com.cn" => 0, #275
    "imop.com" => 0, #283
    "mobilelog.kugou.com" => 0, #286
    "bssdlbig.kugou.com" => 0, #286
    "tvzhe.com" => 0, #290
    "stats.gc.apple.com" => 0, #296
    "img1.sj.qq.com" => 0, #294
    "live.simcitybuildit.com" => 0, #303
    "subscription.iqiyi.com" => 0, #306
    "azureedge.net" => 0, #309
    "surge.sh" => 0, // qq group, @frank
    "ccclub.cmbchina.com" => 0, // #313
    "adv.ccb.com" => 0, // #316
    "conac.cn" => 0, // #317
    "mix.sina.com.cn" => 0, // #320
    "jwpcdn.com" => 0, // #322
    "retcode.taobao.com" => 0, // #312
    "3975.com" => 0, // #326
    "air.1688.com" => 0, // #331
    "continuum.dds.microsoft.com" => 0, // #335
    "sec.resource.xiaomi.net" => 0, // #328
    "api.cortana.ai" => 0, // #338
    "mazu.3g.qq.com" => 0, // #340
    "umiwi.com" => 0, // #341
    "xmpush.xiaomi.com" => 0, // #343
    "doublecklick.net" => 1, // 拼写错误的域名，https://github.com/privacy-protection-tools/anti-AD/pull/347/files
    "issuecdn.baidupcs.com" => 0, // #350
    "duiba.com.cn" => 0, // #352
    "trib.al" => 0, // #357
    "ccmp.eu" => 0, // #365
    "alissl.ucdl.pp.uc.cn" => 0, // #370
    "c3pool.com" => 0, // #371
    "wtradv.market.xiaomi.com" => 0, // #377
    "update.avlyun.sec.miui.com" => 0, // #387
    "sugar.zhihu.com" => 0, // #380
    "chtbl.com" => 0, // #390
    "huoying666.com" => 0, // #405
    "u.huoying666.com" => 0, // #405
    "hsforms.com" => 0, // #420
    "hsforms.net" => 0, // #420
    "jx.cn" => 0, // #423
    "qualtrics.com" => 0, // #434
    "assets.ckjr001.com" => 0, // #433
    "kpstaticbj.wx.ckjr001.com" => 0, // #433
    "www.supportxmr.com.cdn.cloudflare.net" => 0, // #436
    "www.supportxmr.com" => 0, // #436
    "supportxmr.com" => 0, // #436, #490
    "pool.supportxmr.com" => 0, // #436
    "pool-de.supportxmr.com" => 0, // #436
    "minergate.com" => 0, // #439
    "imagetwist.com" => 0, // #447
    "www.kanjiantu.com" => 0, // #451
    "kanjiantu.com" => 0, // #451
    "edge-enterprise.activity.windows.com" => 0, // #401
    "edge.activity.windows.com" => 0, // #401
    "ahd.ruten.com.tw" => 0, // #453
    "cdn.ark.qq.com" => 0, // #461
    "eq.10jqka.com.cn" => 0, // #463
    "stat.10jqka.com.cn" => 0, // #463
    "ozone.10jqka.com.cn" => 0, // #463
    "gleam.io" => 0, // #472
    "sogoucdn.com" => 0, // #471
    "widget.gleamjs.io" => 0, // #472
    "ipapi.co" => 0, // #470
    "ip-adress.com" => 0, // #470
    "ip-api.com" => 0, // #470
    "ipinfodb.com" => 0, // #470
    "ipstack.com" => 0, // #470
    "d10lpsik1i8c69.cloudfront.net" => 0, // #470
    "d1z2jf7jlzjs58.cloudfront.net" => 0, // #470
    "d1zgderxoe1a.cloudfront.net" => 0, // #470
    "d2na2p72vtqyok.cloudfront.net" => 0, // #470
    "d2r1yp2w7bby2u.cloudfront.net" => 0, // #470
    "d2wy8f7a9ursnm.cloudfront.net" => 0, // #470
    "d31qbv1cthcecs.cloudfront.net" => 0, // #470
    "d35u1vg1q28b3w.cloudfront.net" => 0, // #470
    "d3tglifpd8whs6.cloudfront.net" => 0, // #470
    "d3tsytm1wtjqo2.cloudfront.net" => 0, // #470
    "d5nxst8fruw4z.cloudfront.net" => 0, // #470
    "whoami.akamai.net" => 0, // #208
    "kaipuyun.cn" => 0, // #479
    "fraudmetrix.cn" => 1, // #480
    "fp.tongdun.net" => 0, // #480
    "kaptcha.com" => 0, // #481
    "dfcfw.com" => 0, // #482
    "msedge.net" => 0, // #478, #671
    "ecard.shenzhentong.com" => 0, // #486
    "minexmr.com" => 0, // #490
    "appdownload.alicdn.com" => 0, // #491
    "pv.sohu.com" => 0, // #493
    "zconfig.alibabausercontent.com" => 0, // #495
    "proofpoint.com" => 0, // #497
    "mini.eastday.com" => 0, // #500
    "dftoutiao.com" => 0, // #500
    "dcms.1688.com" => 0, // #499
    "da.mmarket.com" => 0, // #501
    "log-upload.mihoyo.com" => 0, // #502
    "wl.spotify.com" => 0, // #508
    "s1.wp.com" => 0, // #510
    "lc-cn-n1-shared.com" => 0, // #512
    "instant.page" => 0, // #514
    "jspassport.ssl.qhimg.com" => 0, // #515
    "service.signalr.net" => 0, // #519
    "threatbook.cn" => 0, // #522
    "gofile.io" => -1, // #525
    "err.taobao.com" => 0, // #521
    "boxer.baidu.com" => 0, // #535
    "simplyhired.com" => 0, // #536
    "x6img.com" => 0, // #537
    "p-l.play.aiseet.atianqi.com" => 0, // #538
    "news-l.play.aiseet.atianqi.com" => 0, // #538
    "bitbucket.io" => 0, #503
    "ename.com.cn" => 0, #503
    "baixing.com" => 0, #503
    "aizhigu.com.cn" => 0, #503
    "clarins.com.cn" => 0, #503
    "jav321.com" => 0, #503
    "knet.cn" => 0, #503
    "pepsico.com.cn" => 0, #503
    "s11.cn" => 0, #503
    "snap.com" => 0, #503
    "nejmqianyan.cn" => 0, #503
    "w8.com.cn" => 0, #503
    "watchtimes.com.cn" => 0, #503
    "whhd.gov.cn" => 0, #503
    "xifuquan.com" => 0, #503
    "xj-n-tax.gov.cn" => 0, #503
    "zazhipu.com" => 0, #503
    "ztgame.com" => 0, #503
    "yximgs.com" => 0, #554
    "cdn.cnbj1.fds.api.mi-img.com" => 0, #556
    "browser.mi-img.com" => 0, #556
    "pic.imgdb.cn" => 0, #565
    "ip-tracker.org" => 0, #578
    "is.snssdk.com" => 0, #579
    "down.360safe.com" => 0, #577
    "soup.v.qq.com" => 0, #576
    "live-trace.bilibili.com" => 0, #561, #517
    "live800.com" => 0, #573
    "www.meipian7.cn" => 0, #586
    "creativecommons.org" => 0, #588
    "go.pardot.com" => 0, #569
    "gbfek.dfcfw.com" => 0, #593
    "dfscdn.dfcfw.com" => 0, #593
    "empic.dfcfw.com" => 0, #593
    "wxapp.lvyadx.cn" => 0, #584
    "canyoublockit.com" => 0, #601
    "d.getpocket.com" => 0, #602
    "pdst.fm" => 0, #603
    "licensebuttons.net" => 0, #609
    "wmflabs.org" => 0, #611
    "jsinfo.net" => 0, #613
    "uol.com.br" => 0, #632
    "ntalker.com" => 0, #626
    "img.shouji.sogou.com" => 0, #623
    "mo.res.wpscdn.cn" => 0, #636
    "qhres2.com" => 0, #638
    "rumble.com" => 0, #639
    "37signals.com" => 0, #647
    "stackpathdns.com" => 0, #645
    "msg.douyu.com" => 0, #649
    "hot.browser.miui.com" => 0, #655
    "linksnappy.com" => 0, #656
    "szlong.weixin.qq.com" => 0, #659
    "metrics.icloud.com" => 0, #661
    "h-adashx.ut.dingtalk.com" => 0, #662
    "adashx.ut.dingtalk.com" => 0, #662
    "ctrip.com" => 0, #666
    "sv.aq.qq.com" => 0, #664
    "nmobi.kuwo.cn" => 0, #665
    "govdelivery.com" => 0, #674
    "meipian7.cn" => 0, #672
    "jimdo.com" => 0, #675
    "gm.mmstat.com" => 0, #680
    "as.mgtv.com" => 0, #678
    "adobe-campaign.com" => 0, #681
    "ssl-cdn.static.browser.mi-img.com" => 0, #689
    "meitubeauty.meitudata.com" => 0, #688
    "my-material.zone1.meitudata.com" => 0, #688
    "profile.csdnimg.cn" => 0, #687
    "db-ip.com" => 0, #699
    "geotrust.com" => 0, #701
    "salon.com" => 0, #711
    "mini2015.qq.com" => 0, #710
    "alimama.com" => 0, #710
    "hqq.tv" => 0, #725
    "gift.douyucdn.cn" => 0, #745
    "urldefense.com" => 0, #741
    "sfp.safe.baidu.com" => 0, #728
    "sofire.baidu.com" => 0, #728
    "c.youdao.com" => 0, #729
    "button.like.co" => 0, #737
    "wgo.mmstat.com" => 0, #730
    "eroterest.net" => 0, #731
    "click.redditmail.com" => 0, #753
    "act.vip.iqiyi.com" => 0, #760
    "vaserviece.10jqka.com.cn" => 0, #765
    "chkaja.com" => 0, #774
    "short-video.kakamobi.cn" => 0, #758
    "qiyukf.com" => 0, #754
    "amdc.m.taobao.com" => 0, #778
    "jiagu.360.cn" => 0, #788
    "mairuan.com" => 0, #772
    "www.mairuan.com" => 0, #772
    "mairuan.com.cn" => 0, #772
    "www.mairuan.com.cn" => 0, #772
    "mairuan.cn" => 0, #772
    "www.mairuan.cn" => 0, #772
    "mairuan.net" => 0, #772
    "www.mairuan.net" => 0, #772
    "ldmnq.com" => 0, #787
    "heytapimage.com" => 0, #779, #780
    "fexclick.baidu.com" => 0, #790
    "jango.com" => 0, #797
    "huluxia.com" => 0, #798
    "ucweb.com" => 0, #801
    "yule.sohu.com" => 0, // #802
    "zoosnet.net" => 0, // #811
    "weworkremotely.com" => 0, // #803
    "sqdd.myapp.com" => 0, // #814
    "eco.taobao.com" => 0, // #815
    "input.shouji.sogou.com" => 0, // #822
    "ccmeng.com" => 0, // #830
    "cupfox.app" => 0, // #829
    "api-secure.solvemedia.com" => 0, // #827
    "code.sms.mob.com" => 0, // #855
    "loginfra.com" => 0, // #826
    "api.open.uc.cn" => 0, // #845
    "statsig.com" => 0, // #869, #860
    "api.statsig.com" => 0, // #869, #860
    "up.cm.ksmobile.com" => 0, // #880
    "star.fallback.c10r.facebook.com" => 0, // #892
    "star.c10r.facebook.com" => 0, // #892
    "icanhazip.com" => 0, // #899
    "ak-d.tripcdn.com" => 0, // #903
    "v6-adashx.ut.cainiao.com" => 0, // #904
    "vip.cainiaofx.com" => 0, // #904
    "ib.snssdk.com" => 0, // #905
    "audid-api.taobao.com" => 0, // #906
    "m.intl.taobao.com" => 0, // #907
    "iflow.uczzd.cn" => 0, // uc搞笑段子
    "m.uczzd.cn" => 0, // uc搞笑段子
    "puds.ucweb.com" => 0, // uc小游戏
    "image.zzd.sm.cn" => 0, // uc浏览器
    "herokuapp.com" => -1,
    "netlify.com" => -1,
    "vidoza.net" => -1,
    "nahnoji.cz" => 1,
    "cloudfront.net" => -1,
    "amazonaws.com" => -1,
    "github.io" => -1,
    "blogspot.com" => -1,
    "cdn77.org" => -1,
    "cloudflare.net" => -1,
    "appspot.com" => -1,
    "cpm.cm.kankan.com" => -1, //-1 失效本条规则，保持现状，即不加白本域名
    "deliver.ifeng.com" => -1, //保留的dead-hosts，为了缩减其子域名
    "ad.xiaomi.com" => -1, //保留的dead-hosts，为了缩减其子域名

    /**notracking 提议加白的一批域名 start**/
    "scribol.com" => 0,
    "tracking.epicgames.com" => 0,
    "logrocket.com" => 0,
    "loggly.com" => 0,
    "om.cbsi.com" => 0,
    "ipinfo.io" => 0,
    "v.shopify.com" => 0,
    "adobedtm.com" => 0,
    "c.evidon.com" => 0,
    "ereg.wip3.adobe.com" => 0,
    "csi.gstatic.com" => 0,
    "g.msn.com" => 0,
    "sascdn.com" => 0,
    "duckdns.org" => 0,
    "prf.hn" => 0,
    "placehold.it" => 0,
    "digg.com" => 0,
    "feedburner.com" => 0,
    "rambler.ru" => 1,
    "jiathis.com" => 0,
    "rs6.net" => 0,
    "com.com" => 0,
    "s0.2mdn.net" => 0,
    "pr0gramm.com" => 0,
    "consent.cmp.oath.com" => 0,
    "s.youtube.com" => 0,
    "purch.com" => 0,
    "fpdownload.macromedia.com" => 0,
    "dynatrace.com" => 0,
    "auditude.com" => 0,
    "app.link" => 0,
    /**notracking 提议加白的一批域名 end**/

    "activate.adobe.com" => 0,
    "ereg.adobe.com" => 0,
    "hlrcv.stage.adobe.com" => 0,
    "lmlicenses.wip4.adobe.com" => 0,
    "na1r.services.adobe.com" => 0,
    "licenses.adobe.com" => 1,
    "alcohol-soft.com" => 1,
    "licenses.ashampoo.com" => 0,
    "bluesoleil.com" => 1,
    "activation.phaseone.com" => 0,
    "corel.com" => 1,
    "dbregistration.cuteftp.com" => 0,
    "cyberlink.com" => 1,
    "activation.easeus.com" => 0,
    "upd.faronicslabs.com" => 0,
    "lumion3d.com" => 1,
    "lumion3d.net" => 1,
    "act2.mediafour.com" => 0,
    "sams.nikonimaging.com" => 0,
    "license.piriform.com" => 0,
    "www.bitsumactivationserver.com" => 0,
    "licensing.tableausoftware.com" => 0,
    "techsmith.com" => 1,
    "binaryage.com" => 1,
    "wisecleaner.com" => 1,
];
