<button
  data-drawer-target="separator-sidebar"
  data-drawer-toggle="separator-sidebar"
  aria-controls="separator-sidebar"
  type="button"
  class="ms-3 mt-2 inline-flex items-center rounded-lg p-2 text-sm text-indigo-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 sm:hidden"
>
  <span class="sr-only">Open sidebar</span>
  <svg
    class="h-6 w-6"
    aria-hidden="true"
    fill="currentColor"
    viewBox="0 0 20 20"
    xmlns="http://www.w3.org/2000/svg"
  >
    <path
      clip-rule="evenodd"
      fill-rule="evenodd"
      d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"
    ></path>
  </svg>
</button>

<aside
  id="separator-sidebar"
  class="fixed left-0 top-0 z-40 h-screen w-64 -translate-x-full transition-transform sm:translate-x-0"
  aria-label="Sidebar"
>
  <div class="h-full overflow-y-auto bg-white px-3 py-4 dark:bg-gray-800">
    <ul class="space-y-2 font-medium">
      <li>
        <a
          href="#"
          class="{{ Request::is("admin/") ? "bg-indigo-900 text-white dark:text-white" : "text-indigo-950 hover:bg-indigo-50 dark:hover:bg-indigo-700" }} group flex items-center rounded-lg p-4"
        >
          <svg
            class="{{ Request::is("admin/") ? "bg-indigo-900 text-white dark:text-white" : "text-gray-400 group-hover:text-indigo-900 dark:text-gray-400 dark:group-hover:text-white" }} h-5 w-5 transition duration-75"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="currentColor"
            viewBox="0 0 24 24"
          >
            <g
              fill="none"
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
            >
              <path d="M11 3.055A9.001 9.001 0 1 0 20.945 13H11z" />
              <path d="M20.488 9H15V3.512A9.03 9.03 0 0 1 20.488 9" />
            </g>
          </svg>
          <span class="ms-3">Dashboard</span>
        </a>
      </li>
      <li>
        <a
          href="#"
          class="{{ Request::is("admin/borrowing/*") ? "bg-indigo-900 text-white dark:text-white" : "text-indigo-950 hover:bg-indigo-50 dark:hover:bg-indigo-700" }} group flex items-center rounded-lg p-4"
        >
          <svg
            class="{{ Request::is("admin/borrowing/*") ? "bg-indigo-900 text-white dark:text-white" : "text-gray-400 group-hover:text-indigo-900 dark:text-gray-400 dark:group-hover:text-white" }} h-5 w-5 transition duration-75"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="currentColor"
            viewBox="0 0 24 24"
          >
            <path
              fill="none"
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"
            />
          </svg>
          <span class="ms-3">Peminjaman</span>
        </a>
      </li>
      <li>
        <a
          href="#"
          class="{{ Request::is("admin/category/*") ? "bg-indigo-900 text-white dark:text-white" : "text-indigo-950 hover:bg-indigo-50 dark:hover:bg-indigo-700" }} group flex items-center rounded-lg p-4"
        >
          <svg
            class="{{ Request::is("admin/category/*") ? "bg-indigo-900 text-white dark:text-white" : "text-gray-400 group-hover:text-indigo-900 dark:text-gray-400 dark:group-hover:text-white" }} h-5 w-5 transition duration-75"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="currentColor"
            viewBox="0 0 24 24"
          >
            <path
              fill="none"
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4 6a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm10 0a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2zM4 16a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm10 0a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2z"
            />
          </svg>
          <span class="ms-3">Kategori</span>
        </a>
      </li>
      <li>
        <a
          href="#"
          class="{{ Request::is("admin/book/*") ? "bg-indigo-900 text-white dark:text-white" : "text-indigo-950 hover:bg-indigo-50 dark:hover:bg-indigo-700" }} group flex items-center rounded-lg p-4"
        >
          <svg
            class="{{ Request::is("admin/book/*") ? "bg-indigo-900 text-white dark:text-white" : "text-gray-400 group-hover:text-indigo-900 dark:text-gray-400 dark:group-hover:text-white" }} h-5 w-5 transition duration-75"
            xmlns="http://www.w3.org/2000/svg"
            width="1.25em"
            height="1.25em"
            viewBox="0 0 24 24"
          >
            <path
              fill="none"
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18s-3.332.477-4.5 1.253"
            />
          </svg>
          <span class="ms-3">Buku</span>
        </a>
      </li>
    </ul>
    <ul class="mt-4 space-y-2 border-t border-gray-200 pt-4 font-medium dark:border-gray-700">
      <li>
        <a
          href="#"
          class="{{ Request::is("admin/profile/*") ? "bg-indigo-900 text-white dark:text-white" : "text-indigo-950 hover:bg-indigo-50 dark:hover:bg-indigo-700" }} group flex items-center rounded-lg p-4"
        >
          <svg
            class="{{ Request::is("admin/profile/*") ? "bg-indigo-900 text-white dark:text-white" : "text-gray-400 group-hover:text-indigo-900 dark:text-gray-400 dark:group-hover:text-white" }} h-5 w-5 transition duration-75"
            xmlns="http://www.w3.org/2000/svg"
            fill="currentColor"
            viewBox="0 0 24 24"
          >
            <g
              fill="none"
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
            >
              <path
                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066-2.573c-.94-1.543.826-3.31 2.37-2.37c.996.608 2.296.07 2.572-1.065"
              />
              <path d="M15 12a3 3 0 1 1-6 0a3 3 0 0 1 6 0" />
            </g>
          </svg>
          <span class="ms-3">Pengaturan</span>
        </a>
      </li>
    </ul>
  </div>
</aside>
