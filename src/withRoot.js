import React from 'react'
import {MuiThemeProvider, createMuiTheme} from '@material-ui/core/styles'
import purple from '@material-ui/core/colors/purple'
import green from '@material-ui/core/colors/green'
import CssBaseline from '@material-ui/core/CssBaseline'

// A theme with custom primary and secondary color.
// It's optional.
const theme = createMuiTheme({
  palette: {
    primary: {
      light: '#69c9ff',
      main: '#0099ff',
      dark: '#006ccb'
    },
    secondary: {
      light: '#f5ff66',
      main: '#bfd730',
      dark: '#8ba600'
    },
    dark: {
      light: '#4f4f4f',
      main: '#272727',
      dark: '#000000'
    }
  },
  typography: {
    useNextVariants: true
  }
})

function withRoot(Component) {
  function WithRoot(props) {
    // MuiThemeProvider makes the theme available down the React tree
    // thanks to React context.
    return (
      <MuiThemeProvider theme={theme}>
        {/* CssBaseline kickstart an elegant, consistent, and simple baseline to build upon. */}
        <CssBaseline/>
        <Component {...props}/>
      </MuiThemeProvider>
    )
  }

  return WithRoot
}

export default withRoot
