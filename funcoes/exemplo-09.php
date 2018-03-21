<?php

  $hierarquia = array (
      array (
        'nome_cargo'=>'CEO',
        'subordinados' => array (
          //Inicio: Diretor Comercial
          array (
            'nome_cargo' => 'Diretor Comercial',
            'subordinados' => array (
              //Inicio: Gerente de Vendas
              array (
                'nome_cargo' => 'Gerente de Vendas'
              )
              //Termino: Gerente de Vendas
            )
          ),
          //Termino: Diretor Comercial
          //Inicio: Diretor Financeiro
          array (
            'nome_cargo' => 'Diretor Financeiro',
            'subordinados' => array (
              //Início: Gerente de Contas a Pagar
                array (
                'nome_cargo' => 'Gerente de Contas a Pagar',
                //Início: Supervisor de Pagamentos
                'subordinados' => array (
                    array (
                    'nome_cargo' => 'Supervisor de Pagamentos'
                    )
                  )
                //Final: Supervisor de Pagamentos
              ),
              //Final: Gerente de Contas a Pagar
              //Início Gerente de Compras
              array (
                'nome_cargo' => 'Gerente de Compras',
                'subordinados' => array (
                //Início Supervisor de Suprimentos
                    array (
                    'nome_cargo' => 'Supervisor de Suprimentos',
                    'subordinados' => array (
                        array (
                          'nome_cargo' => 'Funcionarios'
                          )
                      )
                    )
                  //Final Supervisor de Suprimento
                )
              )
              //Final Gerente de Compras
            )
          )
          //Termino: Diretor Financeiro
        )
      )
    );

    function exibe($cargos){

      $html = '<ul>';

      foreach ($cargos as $cargo) {

        $html .= '<li>';

        $html .= $cargo['nome_cargo'];

        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {

          $html .= exibe($cargo['subordinados']);

        }

        $html .= '</li>';

      }

      $html .='</ul>';

      return $html;
    }

    echo exibe($hierarquia);
 ?>
