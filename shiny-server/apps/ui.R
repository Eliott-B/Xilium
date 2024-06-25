library(shiny)

# Define UI for application that plots random distributions
shinyUI(fluidPage(

  # Application title
  headerPanel("Shiny statistiques de connexion infructueuses"),

  # Show a plot of the generated distribution
  mainPanel(
    plotOutput("distPlot", height = 250)
  )
))
