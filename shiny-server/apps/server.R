library(shiny)
library(XML)

# Define server logic required to draw a histogram
shinyServer(function(input, output) {
  regex <- "Tentative de connexion avec l'username.*"

  files <- list.files("/var/lib/data/")

  dict <- list()
  for (file in files) {
    if (file == "log_template.xml") {
      next
    }

    file_path <- file.path("/var/lib/data/", file)

    data <- xmlParse(file_path)
    xml_data <- xmlToList(data)

    i <- 0
    for (data in xml_data) {
      if (grepl(regex, data["log_content"])) {
        i <- i + 1
      }
    }
    dict[[file]] <- i
  }

  output$distPlot <- renderPlot({
    x <- seq_along(dict)
    y <- unlist(dict)
    if (length(unique(x)) >= 4) {
      plot(x, y, xlab = "Semaines",
           ylab = "Nombre de connections infructueuses", axes = FALSE)
      lines(smooth.spline(x, y), col = "red", lwd = 2)
      axis(1, at = x, labels = names(dict))
      axis(2, at = seq(0, max(y) + 1, by = 1), las = 1)
    } else {
      plot(x, y, xlab = "Semaines",
           ylab = "Nombre de connections infructueuses", axes = FALSE)
      axis(1, at = x, labels = names(dict))
      axis(2, at = seq(0, max(y) + 1, by = 1), las = 1)
    }
  })

})