import {Link, Outlet, Navigate } from "react-router-dom";
import { useStateContext } from "../contexts/ContextProvider";

export default function Master() {
  const{user, token} = useStateContext()

  if (!token) {
    return <Navigate to="/login"></Navigate>
  }

  const onLogout = (e) => {
    e.preventDefault()
  }

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
                <a className="btn-logout" onClick={onLogout} href="#"></a>
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
  