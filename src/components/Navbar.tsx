import React, { useState } from 'react'
import { Link } from 'react-router-dom'

const Navbar: React.FC = () => {
        const [mobileNav, setMobileNav] = useState(false)
        const [changeLanguage, setChangeLanguage] = useState(false)
        const [language,setLanguage] = useState("Eng(USA)")
        return (
                <div className='flex flex-row justify-between items-center relative bg-[#232323]  p-[1vw] rounded-full text-white'>
                        {mobileNav && (
                                <div className="block md:hidden absolute top-[110%] right-0 rounded-md  bg-[#232323] p-[2vw]  w-[70vw]">
                                        {changeLanguage && (
                                                <div className='block md:hidden absolute rounded-md  bg-[#232323] p-[2vw] top-[103%] -left-10 w-[30vw] z-30'>
                                                        <div className="flex flex-row justify-between">
                                                                <div></div>
                                                                <button onClick={() => setChangeLanguage(false)} >
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" className='w-5 h-5 fill-white'>
                                                                                <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                                                                        </svg>
                                                                </button>
                                                        </div>
                                                        <button onClick={() => {
                                                                setChangeLanguage(false)
                                                                setLanguage("Arab")
                                                                console.log("FAsdfasd")
                                                        }} className="flex flex-row gap-3 items-center p-1  rounded-md ">
                                                                <p className='font-medium'>Arab</p>
                                                        </button>
                                                        <button onClick={() => {
                                                                setChangeLanguage(false)
                                                                setLanguage("Eng(USA)")
                                                        }} className="flex flex-row gap-3 items-center p-1  rounded-md ">
                                                                <p className='font-medium'>Eng(USA)</p>
                                                        </button>
                                                        <button onClick={() => {
                                                                setChangeLanguage(false)
                                                                setLanguage("Eng(UK)")
                                                        }} className="flex flex-row gap-3 items-center p-1  rounded-md ">
                                                                <p className='font-medium'>Eng(UK)</p>
                                                        </button>
                                                </div>)}
                                        <div className="flex flex-col gap-1  text-sm w-full">
                                                <div className="flex flex-row justify-between">
                                                        <div></div>
                                                        <button onClick={() => setMobileNav(false)}>
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" className='w-5 h-5 fill-white'>
                                                                        <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                                                                </svg>
                                                        </button>
                                                </div>
                                                <Link to={"/about"}>About us</Link>
                                                <Link to={"/blog"}>Blog</Link>
                                                <Link to={"/contact-us"}>Contact us</Link>
                                                <div className='flex flex-row  items-center  justify-between '>
                                                        <button className="flex flex-row gap-3 items-center  py-[0.8vh]  px-[2vw]" onClick={() => setChangeLanguage(true)}>
                                                                {language === "Eng(USA)" ? <img src="/image/usa.png" alt="United States English" className='w-[4vw]' /> : language === "Eng(UK)" ? <img src="/image/uk.png" alt="United Kingdom" className='w-[4vw]' /> : <img src="/image/arab.png" alt="Arab" className='w-[4vw]' />}
                                                                <p className='font-medium'>{language}</p>
                                                        </button>
                                                        <Link to={"/become-provider"} className='text-black font-medium bg-[#9EE970] py-[0.8vh]  px-[2vw]  rounded-full'>Become a Provider</Link>
                                                </div>
                                        </div>
                                </div>
                        )}
                        <div className="hidden md:flex flex-row gap-4 text-xs lg:text-base">
                                <Link to={"/about"}>About us</Link>
                                <Link to={"/blog"}>Blog</Link>
                                <Link to={"/contact-us"}>Contact us</Link>
                        </div>
                        <img src='/svg/logo.svg' alt='logo' className='w-[10vw]' />
                        <div className='hidden md:flex flex-row gap-3 items-center text-[10px] sm:text-base   '>
                                {changeLanguage && (
                                        <div className='hidden md:block absolute rounded-md  bg-[#232323] p-[1vw] pr-[3vw] top-[110%] right-[10vw] w-[40vw]'>
                                                <div className="flex flex-row justify-between">
                                                        <div></div>
                                                        <button onClick={() => setChangeLanguage(false)}>
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" className='w-5 h-5 fill-white'>
                                                                        <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                                                                </svg>
                                                        </button>
                                                </div>
                                                <button onClick={() => {
                                                        setChangeLanguage(false)
                                                        setLanguage("Arab")
                                                }} className="flex flex-row gap-3 items-center p-1  rounded-md ">
                                                        <p className='font-medium'>Arab</p>
                                                </button>
                                                <button onClick={() => {
                                                        setChangeLanguage(false)
                                                        setLanguage("Eng(USA)")
                                                }} className="flex flex-row gap-3 items-center p-1  rounded-md ">
                                                        <p className='font-medium'>Eng(USA)</p>
                                                </button>
                                                <button onClick={() => {
                                                        setChangeLanguage(false)
                                                        setLanguage("Eng(UK)")
                                                }} className="flex flex-row gap-3 items-center p-1  rounded-md ">
                                                        <p className='font-medium'>Eng(UK)</p>
                                                </button>
                                        </div>
                                )}
                                <div className="flex flex-row gap-3 items-center p-1 border border-[#232323] hover:border rounded-md transition-all  relative" onClick={() => setChangeLanguage(true)}>
                                        {language === "Eng(USA)" ? <img src="/image/usa.png" alt="United States English" /> : language === "Eng(UK)" ? <img src="/image/uk.png" alt="United Kingdom" className='w-[2vw]' /> : <img src="/image/arab.png" alt="Arab" className='w-[2vw]' />}
                                        <p className='font-medium'>{language}</p>
                                </div>
                                <Link to={"/become-provider"} className='text-black font-medium bg-[#9EE970] py-4  px-5 rounded-full'>Become a Provider</Link>
                        </div>
                        <button className="block md:hidden" onClick={() => setMobileNav(true)}>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" className="w-5 h-5 fill-white">
                                        <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                                </svg>
                        </button>
                </div>
        )
}

export default Navbar