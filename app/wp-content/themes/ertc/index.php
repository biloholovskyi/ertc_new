<?php get_header();  ?>

  <section class="home">
    <video src="<?php echo get_template_directory_uri().'/media/video/show.mp4'; ?>" class="show" autoplay muted loop poster="<?php echo get_template_directory_uri().'/media/image/poster.jpg'; ?>"></video>
    <div class="home__content">
      <div class="container">
        <div class="row">
          <div class="col-5">
            <h1 class="home__title">Электронная финансовая система</h1>
            <a href="https://client.ertc.land/auth/login" target="_blank" class="home__enter-platform">Войти на платформу ERtc</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="coin">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h3 class="main-title">ERTC coin</h3>
          <div class="coin__block">
            <div class="name">Валидировано</div>
            <div class="detail">
              <div class="count">418.25</div>
              <div class="info">
                <div class="item">
                  <div class="info__name">Eur</div>
                  <div class="info__count">+1.45</div>
                </div>
                <div class="item">
                  <div class="info__name">%</div>
                  <div class="info__count">+0.35</div>
                </div>
              </div>
            </div>
          </div>

          <div class="coin__block">
            <div class="name">Эмиссия ERTcoin</div>
            <div class="detail">
              <div class="count">998’981.9</div>
              <div class="info">
                <div class="item">
                  <div class="info__name">Eur</div>
                </div>
              </div>
            </div>
          </div>

          <div class="coin__block">
            <div class="name">Курс ERTC</div>
            <div class="detail">
              <div class="count">5.45</div>
              <div class="info">
                <div class="item">
                  <div class="info__name">Eur</div>
                  <div class="info__count">+0.05</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="news">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h3 class="main-title">Новости</h3>
          <div class="news__title">Важные новости</div>
          <a href="#" class="news__important-top">
            <picture>
              <source type="image/img+svg" srcset="<?php echo get_template_directory_uri().'/media/image/news/1.jpg'; ?>">
              <img src="<?php echo get_template_directory_uri().'/media/image/news/1.jpg'; ?>" alt="ertc">
            </picture>
            <span class="content">
          <span class="content__small-title">World</span>
          <span class="content__title">$6 Billion United Nations Agency Launches Bitcoin, Ethereum Crypto Fund</span>
        </span>
          </a>
        </div>
      </div>
      <div class="row news__row">
        <div class="col-4">
          <div class="news__item">
            <picture>
              <source type="image/img+svg" srcset="<?php echo get_template_directory_uri().'/media/image/news/2.jpg'; ?>">
              <img src="<?php echo get_template_directory_uri().'/media/image/news/2.jpg'; ?>" alt="news">
            </picture>
            <div class="news__item__small-title">World</div>
            <div class="news__item__title">Crypto and Blockchain News From Japan: Oct. 7–13 in Re...</div>
          </div>
        </div>
        <div class="col-4">
          <div class="news__item">
            <picture>
              <source type="image/img+svg" srcset="<?php echo get_template_directory_uri().'/media/image/news/3.jpg'; ?>">
              <img src="<?php echo get_template_directory_uri().'/media/image/news/3.jpg'; ?>" alt="news">
            </picture>
            <div class="news__item__small-title">World</div>
            <div class="news__item__title">Crypto and Blockchain News From Japan: Oct. 7–13 in Re...</div>
          </div>
        </div>
        <div class="col-4">
          <div class="news__item">
            <picture>
              <source type="image/img+svg" srcset="<?php echo get_template_directory_uri().'/media/image/news/4.jpg'; ?>">
              <img src="<?php echo get_template_directory_uri().'/media/image/news/4.jpg'; ?>" alt="news">
            </picture>
            <div class="news__item__small-title">World</div>
            <div class="news__item__title">Crypto and Blockchain News From Japan: Oct. 7–13 in Re...</div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="news__title">Новости ERTC</div>
        </div>
      </div>
      <div class="row all-news">
        <div class="col-4">
          <div class="news__item">
            <picture>
              <source type="image/img+svg" srcset="<?php echo get_template_directory_uri().'/media/image/news/2.jpg'; ?>">
              <img src="<?php echo get_template_directory_uri().'/media/image/news/2.jpg'; ?>" alt="news">
            </picture>
            <div class="news__item__small-title">World</div>
            <div class="news__item__title">Crypto and Blockchain News From Japan: Oct. 7–13 in Re...</div>
          </div>
        </div>
        <div class="col-4">
          <div class="news__item">
            <picture>
              <source type="image/img+svg" srcset="<?php echo get_template_directory_uri().'/media/image/news/3.jpg'; ?>">
              <img src="<?php echo get_template_directory_uri().'/media/image/news/3.jpg'; ?>" alt="news">
            </picture>
            <div class="news__item__small-title">World</div>
            <div class="news__item__title">Crypto and Blockchain News From Japan: Oct. 7–13 in Re...</div>
          </div>
        </div>
        <div class="col-4">
          <div class="news__item">
            <picture>
              <source type="image/img+svg" srcset="<?php echo get_template_directory_uri().'/media/image/news/4.jpg'; ?>">
              <img src="<?php echo get_template_directory_uri().'/media/image/news/4.jpg'; ?>" alt="news">
            </picture>
            <div class="news__item__small-title">World</div>
            <div class="news__item__title">Crypto and Blockchain News From Japan: Oct. 7–13 in Re...</div>
          </div>
        </div>
        <div class="col-4">
          <div class="news__item">
            <picture>
              <source type="image/img+svg" srcset="<?php echo get_template_directory_uri().'/media/image/news/2.jpg'; ?>">
              <img src="<?php echo get_template_directory_uri().'/media/image/news/2.jpg'; ?>" alt="news">
            </picture>
            <div class="news__item__small-title">World</div>
            <div class="news__item__title">Crypto and Blockchain News From Japan: Oct. 7–13 in Re...</div>
          </div>
        </div>
        <div class="col-4">
          <div class="news__item">
            <picture>
              <source type="image/img+svg" srcset="<?php echo get_template_directory_uri().'/media/image/news/3.jpg'; ?>">
              <img src="<?php echo get_template_directory_uri().'/media/image/news/3.jpg'; ?>" alt="news">
            </picture>
            <div class="news__item__small-title">World</div>
            <div class="news__item__title">Crypto and Blockchain News From Japan: Oct. 7–13 in Re...</div>
          </div>
        </div>
        <div class="col-4">
          <div class="news__item">
            <picture>
              <source type="image/img+svg" srcset="<?php echo get_template_directory_uri().'/media/image/news/4.jpg'; ?>">
              <img src="<?php echo get_template_directory_uri().'/media/image/news/4.jpg'; ?>" alt="news">
            </picture>
            <div class="news__item__small-title">World</div>
            <div class="news__item__title">Crypto and Blockchain News From Japan: Oct. 7–13 in Re...</div>
          </div>
        </div>
        <div class="col-4">
          <div class="news__item">
            <picture>
              <source type="image/img+svg" srcset="<?php echo get_template_directory_uri().'/media/image/news/2.jpg'; ?>">
              <img src="<?php echo get_template_directory_uri().'/media/image/news/2.jpg'; ?>" alt="news">
            </picture>
            <div class="news__item__small-title">World</div>
            <div class="news__item__title">Crypto and Blockchain News From Japan: Oct. 7–13 in Re...</div>
          </div>
        </div>
        <div class="col-4">
          <div class="news__item">
            <picture>
              <source type="image/img+svg" srcset="<?php echo get_template_directory_uri().'/media/image/news/3.jpg'; ?>">
              <img src="<?php echo get_template_directory_uri().'/media/image/news/3.jpg'; ?>" alt="news">
            </picture>
            <div class="news__item__small-title">World</div>
            <div class="news__item__title">Crypto and Blockchain News From Japan: Oct. 7–13 in Re...</div>
          </div>
        </div>
        <div class="col-4">
          <div class="news__item">
            <picture>
              <source type="image/img+svg" srcset="<?php echo get_template_directory_uri().'/media/image/news/4.jpg'; ?>">
              <img src="<?php echo get_template_directory_uri().'/media/image/news/4.jpg'; ?>" alt="news">
            </picture>
            <div class="news__item__small-title">World</div>
            <div class="news__item__title">Crypto and Blockchain News From Japan: Oct. 7–13 in Re...</div>
          </div>
        </div>
        <div class="col-4">
          <div class="news__item hidden">
            <picture>
              <source type="image/img+svg" srcset="<?php echo get_template_directory_uri().'/media/image/news/2.jpg'; ?>">
              <img src="<?php echo get_template_directory_uri().'/media/image/news/2.jpg'; ?>" alt="news">
            </picture>
            <div class="news__item__small-title">World</div>
            <div class="news__item__title">Crypto and Blockchain News From Japan: Oct. 7–13 in Re...</div>
          </div>
        </div>
        <div class="col-4">
          <div class="news__item hidden">
            <picture>
              <source type="image/img+svg" srcset="<?php echo get_template_directory_uri().'/media/image/news/3.jpg'; ?>">
              <img src="<?php echo get_template_directory_uri().'/media/image/news/3.jpg'; ?>" alt="news">
            </picture>
            <div class="news__item__small-title">World</div>
            <div class="news__item__title">Crypto and Blockchain News From Japan: Oct. 7–13 in Re...</div>
          </div>
        </div>
        <div class="col-4">
          <div class="news__item hidden">
            <picture>
              <source type="image/img+svg" srcset="<?php echo get_template_directory_uri().'/media/image/news/2.jpg'; ?>g">
              <img src="<?php echo get_template_directory_uri().'/media/image/news/2.jpg'; ?>" alt="news">
            </picture>
            <div class="news__item__small-title">World</div>
            <div class="news__item__title">Crypto and Blockchain News From Japan: Oct. 7–13 in Re...</div>
          </div>
        </div>
        <div class="more-news">Больше новостей</div>
      </div>
    </div>
  </section>

  <div class="video">
    <div class="container">
      <div class="row">
        <div class="col-4">
          <h3 class="video__title">Видео</h3>
          <div class="video__name">Binance launches P2P crypto trading in China</div>
          <div class="video__time">World / 4 min</div>
          <div class="next-text">Далее:</div>
          <picture class="next-video">
            <source type="image/img+svg" srcset="<?php echo get_template_directory_uri().'/media/image/next_video.jpg'; ?>">
            <img src="<?php echo get_template_directory_uri().'/media/image/next_video.jpg'; ?>" alt="video">
          </picture>
          <div class="video__name">A Comprehensive Guide to ...</div>
          <div class="video__time none-margin-bottom">World / 4 min</div>
        </div>
        <div class="col-8 current-video__wrapper">
          <picture class="current-video">
            <source type="image/img+svg" srcset="<?php echo get_template_directory_uri().'/media/image/video_poster.jpg'; ?>">
            <img src="<?php echo get_template_directory_uri().'/media/image/video_poster.jpg'; ?>" alt="video">
          </picture>
          <div class="play"></div>
        </div>
      </div>
    </div>
  </div>

<?php get_footer();  ?>