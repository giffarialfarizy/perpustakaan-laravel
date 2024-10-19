if (
  document.getElementById("category-table") &&
  typeof simpleDatatables.DataTable !== "undefined"
) {
  const dataTable = new simpleDatatables.DataTable("#category-table", {
    searchable: false,
    perPageSelect: false,
  });
}
