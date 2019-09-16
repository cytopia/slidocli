# Terraform AWS slidocli

This directory contains a Terraform module to deploy slidocli web interface on AWS.


## Usage
```bash
terraform init
terraform plan
terraform apply
```

<!-- BEGINNING OF PRE-COMMIT-TERRAFORM DOCS HOOK -->
## Inputs

| Name | Description | Type | Default | Required |
|------|-------------|:----:|:-----:|:-----:|
| instance\_type | AWS EC2 instance type to use for slidocli server | string | `"t3.nano"` | no |
| slidocli\_port | Port for slidocli web interface | string | `"8080"` | no |
| tags | Tags to add to all resources | map | `{ "Name": "slidocli" }` | no |
| vpc\_cidr | VPC CIDR | string | `"10.0.0.0/16"` | no |
| vpc\_subnet\_cidr | Subnet CIDR | string | `"10.0.1.0/24"` | no |

## Outputs

| Name | Description |
|------|-------------|
| public\_ip | Public IP address of EC2 instance containing slidocli web interface |
| slidocli\_web\_uri | Slidocli web interface uri |

<!-- END OF PRE-COMMIT-TERRAFORM DOCS HOOK -->
