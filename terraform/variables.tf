variable "vpc_cidr" {
  description = "VPC CIDR"
  default     = "10.0.0.0/16"
}

variable "vpc_subnet_cidr" {
  description = "Subnet CIDR"
  default     = "10.0.1.0/24"
}

variable "slidocli_port" {
  description = "Port for slidocli web interface"
  default     = "8080"
}

variable "instance_type" {
  description = "AWS EC2 instance type to use for slidocli server"
  default     = "t3.nano"
}

variable "tags" {
  description = "Tags to add to all resources"
  default = {
    Name = "slidocli"
  }
}
