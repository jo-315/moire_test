<?php
/*
カテゴリー毎、投稿一覧
blog,event,orgで同じもの
*/
?>

<?php
get_header('member');
?>

<div class="about_content_block">
  <div class="member_content_wrap">
    <div class="member_content">
      <div class="profile_text_title">
        代表   見城 俊介
      </div>

      <div class="member_img">
        <img
          src="<?php echo get_stylesheet_directory_uri(); ?>/images/profile_kenjo.png"
          class="profile_img"
        />
      </div>

      <div class="profile_text">
        <div class="profile_text_content">
          大学に入ってすぐ勧誘されNICE、ひいてはボランティアに関わるように。
          二回生の冬からはBaseconnect Incでエンジニアインターンに参加。
          現在はmoireやNICEの活動を行いつつインターンしてます。
        </div>
      </div>
    </div>
  </div>
</div>

<?php
get_footer();
