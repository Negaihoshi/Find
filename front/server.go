package main

import "github.com/gin-gonic/gin"

func main() {
	router := gin.Default()
	router.Static("/static", "./static")
  router.StaticFile("/", "./index.html")
	// Listen and server on 0.0.0.0:8080
	router.Run(":8080")
}
