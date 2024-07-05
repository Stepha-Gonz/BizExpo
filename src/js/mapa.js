if (document.querySelector("#mapa")) {
  const lat = 4.67653;
  const lng = -74.047949;
  const zoom = 30;

  const map = L.map("mapa").setView([lat, lng], zoom);

  L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
    attribution:
      '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
  }).addTo(map);

  L.marker([lat, lng])
    .addTo(map)
    .bindPopup(
      `<h2 class="mapa__heading"> BizExpo</h2><p class="mapa__texto">Parque de la 93, Bogotá</p>`
    )
    .openPopup();
}
