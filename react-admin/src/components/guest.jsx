import { Navigate, Outlet } from "react-router-dom";
import { useStateContext } from "../contexts/ContextProvider";

export default function Guest() {
  const { token } = useStateContext();

  if (token) {
    return <Navigate to="/dashboard" />;
  }
  return (
    <div className="auth-form">
      <div className="form">
        <Outlet />
      </div>
    </div>
  );
}
