## Diagrama das tabelas

### Users

_____________________________________________
| id                       bigint           |    
| email                    varchar(255)     |
| password                 varchar(255)     |
| id_company               int(*Relacion.*) |
| role                     users_role_enum  |
| last_login               datetime         |
| code                     varchar(64)      |
| code_expiration          datetime         |
| active                   tinyint(1)       |
| blocked_until            datetime         |
| created_at               datetime         |
| updated_at               datetime         |
| deleted_at               datetime         |
_____________________________________________



### Companies

____________________________________________
| id                 bigint                |    
| company_name       varchar(100)          |
| company_logo       varchar(255)          |
| uuid               char(36)              |
| address            varchar(255)          |
| phone              varchar(20)           |
| email              varchar(100)          |
| status             companies_status_enum |
| created_at               datetime        |
| updated_at               datetime        |
| deleted_at               datetime        |
____________________________________________



### Queues
_____________________________________________
| id                  bigint                |    
| id_company          int(*Relacion.*)      |
| name                varchar(100)          |
| description         varchar(255)          |
| service_name        varchar(50)           |
| service_desk        varchar(20)           |
| queue_prefix        varchar(10)           |
| queue_total_digits  int                   |
| queue_colors        varchar(255)          |
| hash_code           varchar(64)           |
| status              queues_status_enum    |
| created_at          datetime              |
| updated_at          datetime              |
| deleted_at          datetime              |
_____________________________________________



### Queue_Tickets

___________________________________________________________________
| id                       bigint                                 |    
| id_queue                 int(*Relacion.*)                       |
| queue_ticket_number      int                                    |
| queue_ticket_created_at  datetime                               |
| queue_ticket_called_at   datetime                               |
| queue_ticket_status      queue_tickets_queue_ticket_status_enum |
| queue_ticket_called_by   varchar(50)                            |
| created_at               datetime                               |
| updated_at               datetime                               |
| deleted_at               datetime                               |
___________________________________________________________________
