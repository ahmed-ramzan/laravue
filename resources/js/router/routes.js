import Logo from "../../components/Logo"
import LogoSymbol from "../../components/LogoSymbol"
import Colors from "../../components/Colors"
import Illustrations from "../../components/Illustrations";
import LoadersAndAnimations from "../../components/LoadersAndAnimations";
import Mascot from "../../components/Mascot";
import Typography from "../../components/Typography";
import Wallpapers from "../../components/Wallpapers";


export default {
    mode: 'history',
    routes: [
        {
            path: '/',
            component: Logo
        },
        {
            path: '/logo-symbol',
            component: LogoSymbol
        },
        {
            path: '/colors',
            component: Colors
        },
        {
            path: '/illustrations',
            component: Illustrations
        },
        {
            path: '/loaders-and-animations',
            component: LoadersAndAnimations
        },
        {
            path: '/mascot',
            component: Mascot
        },
        {
            path: '/typography',
            component: Typography
        },
        {
            path: '/wallpapers',
            component: Wallpapers
        },
    ]
}
