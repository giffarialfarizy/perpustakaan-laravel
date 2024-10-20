if (document.getElementById("book-table") && typeof simpleDatatables.DataTable !== "undefined") {
  const dataTable = new simpleDatatables.DataTable("#book-table", {
    searchable: false,
    perPageSelect: false,
  });
}
