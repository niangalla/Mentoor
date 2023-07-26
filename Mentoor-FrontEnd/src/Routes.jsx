import { createBrowserRouter } from "react-router-dom";
import NotFoundPage from "./pages/NotFoundPage";
import App from "./pages/app/App";

export const router = createBrowserRouter(
    [
        {
            path: "/",
            element: <App />,
            children: [
                // {
                //     path: "",
                //     element: <Home />
                // },
            ]
        },
        {
            path: "*",
            element: <NotFoundPage />,
        }
    ]
);