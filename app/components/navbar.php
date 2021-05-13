<nav class="navbar has-shadow is-spaced">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">

      <!--

        Since the title of our navbar is controlled from our component loader,
        we can easily switch it without having to skim through complex component trees.

      -->

      <?= $_component->params->title ?>

    </a>

    <a role="button" class="navbar-burger" data-target="navMenu">
      <span></span>
      <span></span>
      <span></span>
    </a>

  </div>

  <div id="navMenu" class="navbar-menu">
    <div class="navbar-end">

      <a href="/" class="navbar-item is-current">
        Home
      </a>

      <a href="/about" class="navbar-item">
        About
      </a>

      <a href="/contact" class="navbar-item">
        Contact
      </a>

      <a href="/profile/Trintus" class="navbar-item">
        Profile
      </a>

      <a target="_blank" href="https://github.com/Trintusly/Falsa" class="navbar-item">
        GitHub
      </a>

    </div>
  </div>
</nav>