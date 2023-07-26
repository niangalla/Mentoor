import Header from './../../components/Header'
import Footer from './../../components/Footer'
import './App.css'
import { Outlet } from 'react-router-dom'
import { ScrollRestoration } from 'react-router-dom'


const App = () => {
    return (
        <>
            <Header />
            <Outlet />
            <ScrollRestoration />
            <Footer />
        </>
    )

}
export default App;