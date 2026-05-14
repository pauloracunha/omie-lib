<?php

namespace OmieLib\Estoque\Ajuste;

use OmieLib\Common\OmieFail;

/**
 * Registro do Movimento de Ajuste de Estoque
 *
 * @pw_element integer $codigo_local_estoque Código do local do estoque.<BR><BR>Preenchimento opcional.<BR><BR>Se não for preenchido assumirá o local do estoque padrão.
 * @pw_element integer $id_prod Código do produto.
 * @pw_element string $cod_int Código de Integração do Produto.<BR><BR>Preenchimento opcional.<BR><BR>Preencha esse campo apenas se não tiver preenchido o campo "id_prod".
 * @pw_element string $cod_int_ajuste Código de Integração com sistemas legados.
 * @pw_element string $data Data do Movimento.<BR><BR>Preenchimento obrigatório.
 * @pw_element string $tipo Tipo do Ajuste de Estoque.<BR><BR>Preenchimento obrigatório.<BR><BR>Pode ser:<BR>ENT - Efetua uma entrada no estoque.<BR>SAI - Efetua uma saída no estoque.<BR>SLD - Efetua um ajuste do estoque.<BR>TRF - Efetua uma transferência entre locais de estoque.
 * @pw_element decimal $quan Novo valor para quantidade mínima no estoque.<BR><BR>Preenchimento obrigatório.
 * @pw_element decimal $valor Valor do Movimento.<BR><BR>Preenchimento obrigatório.
 * @pw_element string $obs Observação do Movimento de Estoque.<BR><BR>Preenchimento obrigatório.
 * @pw_element string $origem Origem do Movimento de Estoque.<BR><BR>Preenchimento obrigatório.<BR><BR>Pode ser:<BR><BR>AJU - Ajuste manual de estoque.<BR>PDV - Ajuste realizado pelo PDV.
 * @pw_element string $motivo Motivo do ajuste.<BR><BR>Preenchimento obrigatório.<BR><BR>Pode ser:<BR><BR>Entrada:<BR>INV - Ajuste por Inventário.<BR>OPE - Integração com Ordem de Produção ? Entrada.<BR>PDV - Integração com PDV.<BR>INI - Ajuste por Inventário (Estoque Inicial).<BR><BR>Saída:<BR>INV - Ajuste por Inventário.<BR>PER - Baixa por Perda ou Quebra.<BR>OPS - Integração com Ordem de Produção - Saída.<BR>PDV - Integração com PDV.<BR><BR>Ajuste saldo estoque:<BR>INV - Ajuste por Inventário.<BR>INI - Ajuste por Inventário (Estoque Inicial).<BR>CMC - Ajuste do Valor do CMC.<BR>PDV - Integração com PDV.<BR><BR>Transferência entre locais:<BR>TPQ - Transferência por Perda ou Quebra.<BR>TRF - Transferência entre Locais de Estoque.
 * @pw_element integer $codigo_local_estoque_destino Obrigatório quando utilizar Tipo = "TRF"<BR><BR>Código do local de estoque destino para a transferência.
 * @pw_element lote_validadeArray $lote_validade Informações referente ao lote e validade do produto.<BR><BR>Obrigatório preenchimento para produtos que possuem controle de lote.
 * @pw_element integer $empresa Código da empresa. <BR><BR>DEPRECATED.<BR><BR>Não é necessário informar esse campo.
 * @pw_complex estoque_mov_ajuste_cadastro
 */
class Estoque_mov_ajuste_cadastro{
	/**
	 * Código do local do estoque.<BR><BR>Preenchimento opcional.<BR><BR>Se não for preenchido assumirá o local do estoque padrão.
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque;
	/**
	 * Código do produto.
	 *
	 * @var integer
	 */
	public int $id_prod;
	/**
	 * Código de Integração do Produto.<BR><BR>Preenchimento opcional.<BR><BR>Preencha esse campo apenas se não tiver preenchido o campo "id_prod".
	 *
	 * @var string
	 */
	public string $cod_int;
	/**
	 * Código de Integração com sistemas legados.
	 *
	 * @var string
	 */
	public string $cod_int_ajuste;
	/**
	 * Data do Movimento.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $data;
	/**
	 * Tipo do Ajuste de Estoque.<BR><BR>Preenchimento obrigatório.<BR><BR>Pode ser:<BR>ENT - Efetua uma entrada no estoque.<BR>SAI - Efetua uma saída no estoque.<BR>SLD - Efetua um ajuste do estoque.<BR>TRF - Efetua uma transferência entre locais de estoque.
	 *
	 * @var string
	 */
	public string $tipo;
	/**
	 * Novo valor para quantidade mínima no estoque.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var decimal
	 */
	public float $quan;
	/**
	 * Valor do Movimento.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var decimal
	 */
	public float $valor;
	/**
	 * Observação do Movimento de Estoque.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $obs;
	/**
	 * Origem do Movimento de Estoque.<BR><BR>Preenchimento obrigatório.<BR><BR>Pode ser:<BR><BR>AJU - Ajuste manual de estoque.<BR>PDV - Ajuste realizado pelo PDV.
	 *
	 * @var string
	 */
	public string $origem;
	/**
	 * Motivo do ajuste.<BR><BR>Preenchimento obrigatório.<BR><BR>Pode ser:<BR><BR>Entrada:<BR>INV - Ajuste por Inventário.<BR>OPE - Integração com Ordem de Produção ? Entrada.<BR>PDV - Integração com PDV.<BR>INI - Ajuste por Inventário (Estoque Inicial).<BR><BR>Saída:<BR>INV - Ajuste por Inventário.<BR>PER - Baixa por Perda ou Quebra.<BR>OPS - Integração com Ordem de Produção - Saída.<BR>PDV - Integração com PDV.<BR><BR>Ajuste saldo estoque:<BR>INV - Ajuste por Inventário.<BR>INI - Ajuste por Inventário (Estoque Inicial).<BR>CMC - Ajuste do Valor do CMC.<BR>PDV - Integração com PDV.<BR><BR>Transferência entre locais:<BR>TPQ - Transferência por Perda ou Quebra.<BR>TRF - Transferência entre Locais de Estoque.
	 *
	 * @var string
	 */
	public string $motivo;
	/**
	 * Obrigatório quando utilizar Tipo = "TRF"<BR><BR>Código do local de estoque destino para a transferência.
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque_destino;
	/**
	 * Informações referente ao lote e validade do produto.<BR><BR>Obrigatório preenchimento para produtos que possuem controle de lote.
	 *
	 * @var Lote_validade[]
	 */
	public array $lote_validade;
	/**
	 * Código da empresa. <BR><BR>DEPRECATED.<BR><BR>Não é necessário informar esse campo.
	 *
	 * @var integer
	 */
	public int $empresa;
}
