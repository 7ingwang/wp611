<div class="links navbar-expand py-4" id="links">
  <?php get_template_part('inc/footer/links');?>
</div>

<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <?php get_template_part('inc/header/site-info');?>
        <p class="contact"><span class="adress">地址：河北省沧州市河间市瀛州路街道团结大街16号</span><span class="tel">电话：0317-5580388</span><span class="email">邮箱：<a href="mailto:czqggs@163.com" target="_top">czqggs@163.com</a></span></p>
        <p class="copyright"><span>Copyright © 2022 沧州曲港高速公路建设有限责任公司 版权所有</span><span><a href="https://beian.miit.gov.cn/" target="_blank">冀ICP备2022029595号-1</a></span></p>
      </div>
      <div class="col-md-3 d-flex justify-content-center">
        <div class="weixin text-center">
          <img class="qr-code" src="<?php echo get_template_directory_uri(); ?>/assets/images/1831670487366_.pic.jpg" alt="沧州曲港公司"><span class="text">扫码关注</span></div>
      </div>
    </div>
  </div>
</footer>

<a href="#" id="page-scroll-top" class="ct-scroll-top off"><i class="icon-up"></i></a>

<a class="btn-login" href="<?php echo esc_url( home_url( '/login.php' ) ); ?>"></a>

<?php wp_footer();?>
</body>
</html>
