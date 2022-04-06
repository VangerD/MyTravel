<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
      <a class="navbar-brand" href="/home">PEDULI DIRI</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home" ? 'active' : '') }}" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Catatan" ? 'active' : '') }}" href="/catatan">Catatan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Isi Data Diri" ? 'active' : '') }}" href="/isi">Isi Data Diri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Logout" ? 'active' : '') }}" href="/logout">Log Out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>