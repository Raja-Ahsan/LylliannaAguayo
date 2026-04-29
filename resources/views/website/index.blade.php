@extends('layouts.website.master')

@section('title', $page_title)
@section('meta_description', 'Official recruitment portfolio of Lyllianna Aguayo — Libero/DS, Rio Hondo College. Class of 2027, GPA 3.20. First Team All-League, Second Team All-Conference.')

@section('content')
    <section class="hero" aria-label="Hero section">
      <div class="hero__bg">
        <div class="hero__mesh"></div>
      </div>
      <div class="hero__inner">
        <div class="hero__content">
          <div class="hero__eyebrow">
            <span class="hero__dot"></span>
            <span>Open for Recruitment · Class of 2027</span>
          </div>
          <h1 class="hero__name">
            <span class="hero__name-first">Lyllianna</span>
            <span class="hero__name-last">Aguayo</span>
          </h1>
          <p class="hero__position">
            <span class="hero__position-badge">Libero / DS</span>
            <span class="hero__position-divider">·</span>
            <span class="hero__position-text">Indoor &amp; Beach Volleyball</span>
          </p>
          <p class="hero__tagline">
            A relentless competitor who digs every ball, lifts every teammate, and never leaves energy on the sideline.
          </p>
          <div class="hero__ctas">
            <a href="mailto:lyllivb.Libero07@gmail.com" class="btn btn--primary btn--lg">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,12 2,6"></polyline></svg>
              Email Me
            </a>
            <a href="#videos" class="btn btn--secondary btn--lg">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
              Watch Highlights
            </a>
          </div>
          <div class="hero__social-proof">
            <div class="hero__proof-item">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"></path></svg>
              <span>1st Team All-League</span>
            </div>
            <div class="hero__proof-divider"></div>
            <div class="hero__proof-item">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"></path></svg>
              <span>2nd Team All-Conference SCC</span>
            </div>
            <div class="hero__proof-divider"></div>
            <div class="hero__proof-item">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
              <span>GPA 3.20</span>
            </div>
          </div>
        </div>
        <div class="hero__visual">
          <div class="hero__img-frame">
            <div class="hero__img-glow"></div>
            <img src="https://imagedelivery.net/R3XOqFcTepHxP5M00fjeUw/8a887572-ecce-405e-e7e7-68de50b94c00/img256" alt="Volleyball player in action" width="800" height="900" loading="eager" class="hero__img">
            <div class="hero__img-overlay"></div>
          </div>
          <div class="hero__float-card hero__float-card--digs">
            <span class="float-card__value">225</span>
            <span class="float-card__label">Digs — 2025</span>
          </div>
          <div class="hero__float-card hero__float-card--aces">
            <span class="float-card__value">19</span>
            <span class="float-card__label">Aces — 2025</span>
          </div>
        </div>
      </div>
      <div class="hero__scroll-hint">
        <div class="hero__scroll-line"></div>
        <span>Scroll</span>
      </div>
    </section>

    <section class="stats-bar" id="stats">
      <div class="stats-bar__inner">
        <div class="stats-bar__grid">
          <article class="stat-card">
            <div class="stat-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path><path d="M12 8v4l3 3"></path></svg></div>
            <span class="stat-card__value" data-target="225">0</span>
            <span class="stat-card__label">Digs</span>
          </article>
          <article class="stat-card">
            <div class="stat-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg></div>
            <span class="stat-card__value" data-target="19">0</span>
            <span class="stat-card__label">Aces</span>
          </article>
          <article class="stat-card">
            <div class="stat-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></div>
            <span class="stat-card__value" data-target="23">0</span>
            <span class="stat-card__label">Assists</span>
          </article>
          <article class="stat-card">
            <div class="stat-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></div>
            <span class="stat-card__value stat-card__value--text">5'4"</span>
            <span class="stat-card__label">Height</span>
          </article>
          <article class="stat-card">
            <div class="stat-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg></div>
            <span class="stat-card__value stat-card__value--text">3.20</span>
            <span class="stat-card__label">GPA</span>
          </article>
        </div>
      </div>
    </section>

    <section class="about section" id="about">
      <div class="container">
        <div class="section-header reveal">
          <span class="section-eyebrow">Who I Am</span>
          <h2 class="section-title">More Than a Position</h2>
        </div>
        <div class="about__grid">
          <div class="about__text reveal">
            <p class="about__lead">I am a multi-sport athlete competing in both indoor and beach volleyball at Rio Hondo College — a freshman who brings energy, IQ, and relentless work ethic.</p>
            <p class="about__body">My passion for volleyball is matched only by commitment to my teammates. I put others first — always. I hustle for every ball, narrate the court, lift the energy, and never let one mistake define a set. My background as a setter and opposite gives me rare court vision for a libero.</p>
            <p class="about__body">Beyond volleyball, I was a multi-event track athlete competing in the 4×400, long jump, triple jump, and high jump — which built the athleticism and competitive IQ I bring to every match.</p>
            <div class="about__traits">
              <div class="trait-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>Coachable</div>
              <div class="trait-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>High Court IQ</div>
              <div class="trait-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>Multi-Sport</div>
              <div class="trait-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>Team-First</div>
            </div>
          </div>
          <div class="about__visual reveal reveal--right">
            <div class="about__img-wrap">
              <img src="https://images.unsplash.com/photo-1547941126-3d5322b218b0?w=700&amp;q=80" alt="Beach volleyball" width="700" height="800" loading="lazy" class="about__img">
              <div class="about__img-accent"></div>
            </div>
            <div class="about__service-cards">
              <div class="service-card reveal">
                <div class="service-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle></svg></div>
                <div><p class="service-card__title">Youth Volleyball Coaching</p><p class="service-card__desc">Volunteers coaching volleyball to young kids</p></div>
              </div>
              <div class="service-card reveal">
                <div class="service-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></div>
                <div><p class="service-card__title">Track Volunteer Coach</p><p class="service-card__desc">Coaching track at Los Altos High School</p></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="awards section section--alt" id="awards">
      <div class="container">
        <div class="section-header reveal">
          <span class="section-eyebrow">Recognition</span>
          <h2 class="section-title">Awards &amp; Honors</h2>
        </div>
        <div class="awards__grid">
          <article class="award-card reveal">
            <div class="award-card__number">01</div>
            <div class="award-card__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"></path></svg></div>
            <h3 class="award-card__title">First Team All-League Varsity</h3>
            <p class="award-card__org">Los Altos High School</p>
            <p class="award-card__year">2024</p>
          </article>
          <article class="award-card award-card--featured reveal">
            <div class="award-card__number">02</div>
            <div class="award-card__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01L12 2z"></path></svg></div>
            <h3 class="award-card__title">Second Team All-Conference</h3>
            <p class="award-card__org">SCC · Rio Hondo College</p>
            <p class="award-card__year">2025</p>
            <div class="award-card__featured-badge">College Level</div>
          </article>
          <article class="award-card reveal">
            <div class="award-card__number">03</div>
            <div class="award-card__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="8" r="6"></circle><path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"></path></svg></div>
            <h3 class="award-card__title">Multi-Sport Athlete</h3>
            <p class="award-card__org">Track &amp; Field — Los Altos HS</p>
            <p class="award-card__year">4×400 · Long Jump · Triple Jump</p>
          </article>
        </div>
      </div>
    </section>

    <section class="videos section" id="videos">
      <div class="container">
        <div class="section-header reveal">
          <span class="section-eyebrow">On the Court</span>
          <h2 class="section-title">Highlight Videos</h2>
        </div>
        <div class="videos__grid">
          <article class="video-card video-card--featured reveal">
            <div class="video-card__thumb">
              <div class="video-card__thumb-bg"></div>
              <div class="video-card__play-wrap"><div class="video-card__play-btn"><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg></div></div>
              <div class="video-card__label">Featured</div>
            </div>
            <div class="video-card__info">
              <h3 class="video-card__title">2025 Season Highlight — Vol. 1</h3>
              <p class="video-card__meta">Rio Hondo College · Women's Volleyball</p>
              <a href="https://www.fieldlevel.com/app/profile/lyllianna.aguayo/volleyballwomen/videos/3585866" target="_blank" rel="noopener noreferrer" class="btn btn--primary btn--sm">Watch on FieldLevel</a>
            </div>
          </article>
          <article class="video-card reveal">
            <div class="video-card__thumb"><div class="video-card__thumb-bg video-card__thumb-bg--2"></div><div class="video-card__play-wrap"><div class="video-card__play-btn"><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg></div></div></div>
            <div class="video-card__info"><h3 class="video-card__title">Match Footage — Vol. 2</h3><p class="video-card__meta">Defense &amp; Serve Receive</p><a href="https://www.fieldlevel.com/app/profile/lyllianna.aguayo/volleyballwomen/videos/3549002" target="_blank" rel="noopener noreferrer" class="btn btn--ghost btn--sm">Watch →</a></div>
          </article>
          <article class="video-card reveal">
            <div class="video-card__thumb"><div class="video-card__thumb-bg video-card__thumb-bg--3"></div><div class="video-card__play-wrap"><div class="video-card__play-btn"><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg></div></div></div>
            <div class="video-card__info"><h3 class="video-card__title">Match Footage — Vol. 3</h3><p class="video-card__meta">Digs &amp; Court Coverage</p><a href="https://www.fieldlevel.com/app/profile/lyllianna.aguayo/volleyballwomen/videos/3546474" target="_blank" rel="noopener noreferrer" class="btn btn--ghost btn--sm">Watch →</a></div>
          </article>
          <article class="video-card reveal">
            <div class="video-card__thumb"><div class="video-card__thumb-bg video-card__thumb-bg--4"></div><div class="video-card__play-wrap"><div class="video-card__play-btn"><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg></div></div></div>
            <div class="video-card__info"><h3 class="video-card__title">Match Footage — Vol. 4</h3><p class="video-card__meta">Passing &amp; Communication</p><a href="https://www.fieldlevel.com/app/profile/lyllianna.aguayo/volleyballwomen/videos/3546473" target="_blank" rel="noopener noreferrer" class="btn btn--ghost btn--sm">Watch →</a></div>
          </article>
          <article class="video-card reveal">
            <div class="video-card__thumb"><div class="video-card__thumb-bg video-card__thumb-bg--5"></div><div class="video-card__play-wrap"><div class="video-card__play-btn"><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg></div></div></div>
            <div class="video-card__info"><h3 class="video-card__title">Match Footage — Vol. 5</h3><p class="video-card__meta">Serve &amp; Receive</p><a href="https://www.fieldlevel.com/app/profile/lyllianna.aguayo/volleyballwomen/videos/3546472" target="_blank" rel="noopener noreferrer" class="btn btn--ghost btn--sm">Watch →</a></div>
          </article>
          <article class="video-card reveal">
            <div class="video-card__thumb"><div class="video-card__thumb-bg video-card__thumb-bg--6"></div><div class="video-card__play-wrap"><div class="video-card__play-btn"><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg></div></div></div>
            <div class="video-card__info"><h3 class="video-card__title">Match Footage — Vol. 6</h3><p class="video-card__meta">Full Match</p><a href="https://www.fieldlevel.com/app/profile/lyllianna.aguayo/volleyballwomen/videos/3546441" target="_blank" rel="noopener noreferrer" class="btn btn--ghost btn--sm">Watch →</a></div>
          </article>
          <article class="video-card reveal">
            <div class="video-card__thumb"><div class="video-card__thumb-bg video-card__thumb-bg--7"></div><div class="video-card__play-wrap"><div class="video-card__play-btn"><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg></div></div></div>
            <div class="video-card__info"><h3 class="video-card__title">Match Footage — Vol. 7</h3><p class="video-card__meta">Defense Highlights</p><a href="https://www.fieldlevel.com/app/profile/lyllianna.aguayo/volleyballwomen/videos/3546432" target="_blank" rel="noopener noreferrer" class="btn btn--ghost btn--sm">Watch →</a></div>
          </article>
          <article class="video-card reveal">
            <div class="video-card__thumb"><div class="video-card__thumb-bg video-card__thumb-bg--8"></div><div class="video-card__play-wrap"><div class="video-card__play-btn"><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg></div></div></div>
            <div class="video-card__info"><h3 class="video-card__title">Match Footage — Vol. 8</h3><p class="video-card__meta">Aces &amp; Serve</p><a href="https://www.fieldlevel.com/app/profile/lyllianna.aguayo/volleyballwomen/videos/3546421" target="_blank" rel="noopener noreferrer" class="btn btn--ghost btn--sm">Watch →</a></div>
          </article>
          <article class="video-card reveal">
            <div class="video-card__thumb"><div class="video-card__thumb-bg video-card__thumb-bg--9"></div><div class="video-card__play-wrap"><div class="video-card__play-btn"><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg></div></div></div>
            <div class="video-card__info"><h3 class="video-card__title">Match Footage — Vol. 9</h3><p class="video-card__meta">Season Recap</p><a href="https://www.fieldlevel.com/app/profile/lyllianna.aguayo/volleyballwomen/videos/3546418" target="_blank" rel="noopener noreferrer" class="btn btn--ghost btn--sm">Watch →</a></div>
          </article>
        </div>
        <div class="videos__cta reveal">
          <a href="https://www.fieldlevel.com/app/profile/lyllianna.aguayo/volleyballwomen" target="_blank" rel="noopener noreferrer" class="btn btn--primary btn--lg">View Full FieldLevel Profile</a>
        </div>
      </div>
    </section>

    <section class="academics section section--alt" id="academics">
      <div class="container">
        <div class="section-header reveal">
          <span class="section-eyebrow">Academic Profile</span>
          <h2 class="section-title">Education &amp; Contacts</h2>
        </div>
        <div class="academics__grid">
          <div class="academics__school reveal">
            <div class="school-card">
              <div class="school-card__header">
                <div class="school-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg></div>
                <div><h3 class="school-card__name">Rio Hondo College</h3><p class="school-card__address">3600 Workman Mill Rd, Whittier, CA 90601</p></div>
              </div>
              <div class="school-card__stats">
                <div class="school-stat"><span class="school-stat__val">3.20</span><span class="school-stat__key">GPA</span></div>
                <div class="school-stat"><span class="school-stat__val">2027</span><span class="school-stat__key">Grad</span></div>
                <div class="school-stat"><span class="school-stat__val">FR</span><span class="school-stat__key">Year</span></div>
              </div>
              <div class="school-card__info"><p class="school-card__info-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.9 13.5a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.81 2.8h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l.96-.96a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21.92 17z"></path></svg>(562) 692-0921</p><p class="school-card__id">Student ID: 001522842</p></div>
            </div>
          </div>
          <div class="academics__contacts reveal reveal--right">
            <h3 class="academics__contacts-title">Academic Staff</h3>
            <div class="contact-list">
              <article class="contact-item">
                <div class="contact-item__avatar">LM</div>
                <div class="contact-item__info"><p class="contact-item__name">Lopez Moreno, Nadia</p><p class="contact-item__role">Counselor</p><a href="mailto:nmoreno@riohondo.edu" class="contact-item__email">nmoreno@riohondo.edu</a></div>
              </article>
              <article class="contact-item">
                <div class="contact-item__avatar">JW</div>
                <div class="contact-item__info"><p class="contact-item__name">Jackson Wong</p><p class="contact-item__role">Head Coach</p><a href="mailto:Jawong@riohondo.edu" class="contact-item__email">Jawong@riohondo.edu</a><a href="tel:6264294255" class="contact-item__phone">(626) 429-4255</a></div>
              </article>
              <article class="contact-item">
                <div class="contact-item__avatar">JR</div>
                <div class="contact-item__info"><p class="contact-item__name">Jennifer Reynoso</p><p class="contact-item__role">Assistant Coach</p><a href="mailto:JReynoso@riohondo.edu" class="contact-item__email">JReynoso@riohondo.edu</a><a href="tel:5623297166" class="contact-item__phone">(562) 329-7166</a></div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="references section" id="references">
      <div class="container">
        <div class="section-header reveal">
          <span class="section-eyebrow">Vouched For</span>
          <h2 class="section-title">Coach References</h2>
        </div>
        <div class="references__grid">
          <article class="ref-card reveal">
            <div class="ref-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></div>
            <div class="ref-card__content"><h3 class="ref-card__name">Coach Tim</h3><p class="ref-card__role">Varsity Volleyball Coach</p><p class="ref-card__school">Los Altos High School</p><a href="tel:7143302417" class="ref-card__phone"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.9 13.5a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.81 2.8h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l.96-.96a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21.92 17z"></path></svg>(714) 330-2417</a></div>
          </article>
          <article class="ref-card reveal">
            <div class="ref-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></div>
            <div class="ref-card__content"><h3 class="ref-card__name">Bryan Pagdillo</h3><p class="ref-card__role">Club Manager</p><p class="ref-card__school">Club 626</p><a href="tel:9095246662" class="ref-card__phone"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.9 13.5a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.81 2.8h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l.96-.96a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21.92 17z"></path></svg>(909) 524-6662</a></div>
          </article>
          <article class="ref-card reveal">
            <div class="ref-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></div>
            <div class="ref-card__content"><h3 class="ref-card__name">Joel Baza</h3><p class="ref-card__role">Head Coach</p><p class="ref-card__school">Foothill Coach &amp; Charter Oaks HS</p></div>
          </article>
        </div>
      </div>
    </section>

    <section class="cta-banner">
      <div class="cta-banner__bg"><div class="cta-banner__mesh"></div></div>
      <div class="container">
        <div class="cta-banner__inner reveal">
          <span class="cta-banner__eyebrow">Ready to Compete</span>
          <h2 class="cta-banner__title">Let's Connect</h2>
          <p class="cta-banner__text">If you're looking for a passionate, coachable libero who brings energy and heart — I'm ready.</p>
          <div class="cta-banner__actions">
            <a href="mailto:lyllivb.Libero07@gmail.com" class="btn btn--secondary btn--lg">Email Me</a>
            <a href="tel:6264066538" class="btn btn--outline btn--lg">Call Me</a>
          </div>
        </div>
      </div>
    </section>

    <section class="contact section section--alt" id="contact">
      <div class="container">
        <div class="section-header reveal">
          <span class="section-eyebrow">Get In Touch</span>
          <h2 class="section-title">Contact Lyllianna</h2>
        </div>
        <div class="contact__grid">
          <div class="contact__info reveal">
            <div class="contact__info-card">
              <h3 class="contact__info-name">Lyllianna Aguayo</h3>
              <p class="contact__info-position">Libero / DS · Rio Hondo College</p>
              <div class="contact__info-list">
                <a href="mailto:lyllivb.Libero07@gmail.com" class="contact__info-row">
                  <div class="contact__info-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,12 2,6"></polyline></svg></div>
                  <div><p class="contact__info-label">Email</p><p class="contact__info-value">lyllivb.Libero07@gmail.com</p></div>
                </a>
                <a href="tel:6264066538" class="contact__info-row">
                  <div class="contact__info-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.9 13.5a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.81 2.8h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l.96-.96a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21.92 17z"></path></svg></div>
                  <div><p class="contact__info-label">Phone</p><p class="contact__info-value">(626) 406-6538</p></div>
                </a>
                <div class="contact__info-row">
                  <div class="contact__info-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg></div>
                  <div><p class="contact__info-label">Location</p><p class="contact__info-value">5368 Durfee Ave, El Monte, CA 91732</p></div>
                </div>
              </div>
            </div>
          </div>
          <div class="contact__fieldlevel reveal reveal--right">
            <div class="fieldlevel-card">
              <div class="fieldlevel-card__header">
                <svg class="fieldlevel-card__logo-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                <span class="fieldlevel-card__logo-text">FieldLevel</span>
              </div>
              <p class="fieldlevel-card__desc">View full recruitment profile, game footage, verified stats, and more.</p>
              <a href="https://www.fieldlevel.com/app/profile/lyllianna.aguayo/volleyballwomen" target="_blank" rel="noopener noreferrer" class="btn btn--primary btn--lg">View Profile</a>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
