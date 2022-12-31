import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/js/dist/util';
import 'bootstrap/js/dist/dropdown';
import { createBrowserRouter, RouterProvider } from 'react-router-dom';
import ShowLibrary from './Components/ShowLibrary';
import NoAuthLayout from './Layouts/NoAuthLayout';
//import Login from './Pages/Login';
import Files from './Components/Files'

const router = createBrowserRouter([

  /*{
    path: '/',
    element: < Login />
  }, */

  {
    path: '/',
    element: < Files />
  },

  {
    path: '/home',
    element: < NoAuthLayout />,
    children: [
      {
        path: '/home/library',
        element: <ShowLibrary/>
      }
    ]
  }
])



ReactDOM.createRoot(document.getElementById('root')).render(
  <React.StrictMode>
    <RouterProvider router={router} />
  </React.StrictMode>
);
