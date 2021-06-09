const layouts = [
  { name: 'Dashboard 1',
    value: 'dashboard-1',
    image: './assets/images/intro/demo/layout/dashboard-1.jpg',
    subTitle: 'Side menu , Reporting Dashboard',
    link: './backend/index.html',
    lable: '',
    links: [
      {
        name: 'HTML',
        link: './backend/index.html'
      }
    ]
  },
  { name: 'Dashboard 2',
    value: 'dashboard-2',
    image: './assets/images/intro/demo/layout/dashboard-2.jpg',
    subTitle: 'Side menu, Analytic Dashboard ',
    link: './backend/dashboard-2.html',
    lable: '',
    links: [
      {
        name: 'HTML',
        link: './backend/dashboard-2.html'
      }
    ]
 },
  {
    name: 'Dashboard 3',
    value: 'dashboard-3',
    image: './assets/images/intro/demo/layout/dashboard-3.jpg',
    subTitle: 'Side menu, Campaigning Dashboard',
    link: './backend/dashboard-3.html',
    lable: '',
    links: [
      {
        name: 'HTML',
        link: './backend/dashboard-3.html'
      }
    ]
 },


]

const app = [

]

const backend = [
  {
    name: 'User Management',
    value: 'user',
    type: 'app',
    image: './assets/images/intro/demo/layout/app-5.jpg',
    subTitle: 'Member & user management module',
    link: './app/user-profile.html',
    links: [
      {
        name: 'HTML',
        link: './app/user-profile.html'
      }
    ]
  },
  {
    name: 'Chat',
    value: 'chat',
    type: 'app',
    image: './assets/images/intro/demo/layout/app-9.jpg',
    subTitle: 'Clean & simple chat app',
    link: './app/chat.html',
    links: [
      {
        name: 'HTML',
        link: './app/chat.html'
      }
    ]
  },
  {
    name: 'Error 500',
    value: 'error-500',
    type: 'backend',
    image: './assets/images/intro/demo/layout/error-500.jpg',
    link: './backend/pages-error-500.html',
    links: [
      {
        name: 'HTML',
        link: './backend/pages-error-500.html'
      }
    ]
  },
  {
    name: 'Register',
    value: 'register',
    type: 'backend',
    image: './assets/images/intro/demo/layout/sign-up.jpg',
    link: './backend/auth-sign-up.html',
    links: [
      {
        name: 'HTML',
        link: './backend/auth-sign-up.html'
      }
    ]
  },
  {
    name: 'Timeline',
    value: 'timeline',
    type: 'backend',
    image: './assets/images/intro/demo/layout/time.jpg',
    link: './backend/timeline.html',
    links: [
      {
        name: 'HTML',
        link: './backend/timeline.html'
      }
    ]
  },
  {
    name: 'Pricing',
    value: 'pricing',
    type: 'backend',
    image: './assets/images/intro/demo/layout/price.jpg',
    link: './backend/pricing-3.html',
    links: [
      {
        name: 'HTML',
        link: './backend/pricing-3.html'
      }
    ]
  },
  {
    name: 'Error 404',
    value: 'error-404',
    type: 'backend',
    image: './assets/images/intro/demo/layout/error-404.jpg',
    link: './backend/pages-error.html',
    links: [
      {
        name: 'HTML',
        link: './backend/pages-error.html'
      }
    ]
  },
  {
    name: 'Maintenance',
    value: 'maintenance',
    type: 'backend',
    image: './assets/images/intro/demo/layout/maintanance.jpg',
    link: './backend/pages-maintenance.html',
    links: [
      {
        name: 'HTML',
        link: './backend/pages-maintenance.html'
      }
    ]
  }
]






const allBackendPages = [
  { value: 'widget', name: 'Widget', type: 'backend', mage: '' },
  { value: 'ui', name: 'Ui Elements', type: 'backend', mage: '' },
  { value: 'plugin', name: 'Plugins', type: 'backend', mage: '' },
  { value: 'form', name: 'Form', type: 'backend', mage: '' },
  { value: 'table', name: 'Table', type: 'backend', mage: '' },
  { value: 'icon', name: 'Icon', type: 'backend', mage: '' },
  { value: 'gallery', name: 'Gallery', type: 'backend', mage: '' },
  { value: 'blog', name: 'Blog', type: 'backend', mage: '' },
  { value: 'chart', name: 'Chart', type: 'backend', mage: '' },
  { value: 'map', name: 'Map', type: 'backend', mage: '' },
  { value: 'auth', name: 'Auth', type: 'backend', mage: '' },
  { value: 'contact', name: 'Contact', type: 'backend', image: '' },
  { value: 'timeline', name: 'Timeline', type: 'backend', image: '' },
  { value: 'pricing', name: 'Pricing', type: 'backend', image: '' },
  { value: 'pages-error', name: 'Error', type: 'backend', image: '' },
  { value: 'pages-invoice', name: 'Invoice', type: 'backend', image: '' },
  { value: 'pages-subscribers', name: 'Subscribers', type: 'backend', image: '' },
  { value: 'pages-faq', name: 'FAQ', type: 'backend', image: '' },
  { value: 'pages-blank-page', name: 'Blank Page', type: 'backend', image: '' },
  { value: 'pages-maintenance', name: 'Maintenance', type: 'backend', image: '' },
  { value: 'pages-comingsoon', name: 'Coming soon', type: 'backend', image: '' },
  { value: 'terms-of-service', name: 'Terms of service', type: 'backend', image: '' },
  { value: 'privacy-policy', name: 'Privacy Policy', type: 'backend', image: '' }
]

module.exports = { layouts, app, backend, allBackendPages }
