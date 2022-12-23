import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/js/dist/util';
import 'bootstrap/js/dist/dropdown';
import { createBrowserRouter, RouterProvider } from 'react-router-dom';
import ShowLibrary from './Components/ShowLibrary';
import AuthLayout from './Layouts/AuthLayout';
import Login from './Pages/Login';

const router = createBrowserRouter([

  {
    path: '/',
    element: < Login />
  },

  {
    path: '/home',
    element: < AuthLayout />,
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
