import {Link, Outlet, Navigate } from "react-router-dom";
import { useStateContext } from "../contexts/ContextProvider";
import { useEffect } from "react";
import axiosClient from "../axios-client";

export default function Master() {
  const{user, token, setUser, setToken} = useStateContext()

  if (!token) {
    return <Navigate to="/admin/login"></Navigate>
  }

  const onLogout = (e) => {
    e.preventDefault()
    axiosClient.post('/logout')
    .then(() => {
      setUser({})
      setToken(null)
    })
  }

  useEffect(() => {
    axiosClient.get('/profile')
    .then(({data}) => {
      setUser(data.user)
    })
  }, []);

  return (
    <>
      <div id="master">
        <aside>
          <Link to="/dashboard"> Dashboard</Link>
          <Link to="/users"> Users</Link>
        </aside>
        <div className="content">
            <header>
              <div>Header</div>
              <div>
                {user.name}
                <a className="btn-logout" onClick={onLogout} href="#">Log Out</a>
              </div>
            </header>
            <main>
              <Outlet />
            </main>
        </div>
      </div>
    </>
  );
  }
  