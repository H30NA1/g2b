import { createBrowserRouter, Navigate } from "react-router-dom";
import Login from "./views/auth/login";
import Dashboard from "./views/auth/dashboard";
import Register from "./views/auth/register";
import NotFound from "./views/auth/404";
import Master from "./components/master";
import Guest from "./components/guest";
import Users from "./views/auth/users";

const router = createBrowserRouter([
  {
    path: "/",
    element: <Master />,
    children: [
      {
        path: "/",
        element: <Navigate to="/dashboard" />,
      },
      {
        path: "/dashboard",
        element: <Dashboard />,
      },
      {
        path: "/users",
        element: <Users />,
      },
    ],
  },
  {
    path: "/",
    element: <Guest />,
    children: [
      {
        path: "/login",
        element: <Login />,
      },
      {
        path: "/register",
        element: <Register />,
      },
    ],
  },
  {
    path: "*",
    element: <NotFound />,
  },
]);

export default router;
