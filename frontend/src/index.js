import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import 'bootstrap/dist/css/bootstrap.min.css';
import { createBrowserRouter, RouterProvider } from 'react-router-dom';
import ShowLibrary from './Components/ShowLibrary';
import NoAuthLayout from './Layouts/NoAuthLayout';
import AuthLayout from './Layouts/AuthLayout';

const router = createBrowserRouter([
  {
    path: '/',
    element: < AuthLayout />,
    children: [
      {
        path: '/library',
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
