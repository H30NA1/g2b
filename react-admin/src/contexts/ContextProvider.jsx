import { createContext, useContext, useState } from "react";

const StateContext = createContext({
  user: null,
  token: null,
  setUser: () => {},
  setToken: () => {}
});

export const ContextProvider = ({ children }) => {
  const [user, setUser] = useState({
    name:"Hieu"
  });
  const [token, _setToken] = useState(localStorage.getItem("TOKEN"));

  const setToken = (token) => {
    _setToken(token);
    if (token) {
      localStorage.setItem("TOKEN", token);
    } else {
      localStorage.removeItem("TOKEN");
    }
  };

  return (
    <StateContext.Provider
      value={{
        user,
        token,
        setUser,
        setToken
      }}>
      {children}
    </StateContext.Provider>
  );
};

export const useStateContext = () => useContext(StateContext)