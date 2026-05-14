<?php

namespace OmieLib\Produtos\Recebimentonfe\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Recebimentonfe\Cabec;
use OmieLib\Produtos\Recebimentonfe\Categorias;
use OmieLib\Produtos\Recebimentonfe\CteCfopEntrada;
use OmieLib\Produtos\Recebimentonfe\Departamentos;
use OmieLib\Produtos\Recebimentonfe\Ide;
use OmieLib\Produtos\Recebimentonfe\InfoAdicionais;
use OmieLib\Produtos\Recebimentonfe\InfoCadastro;
use OmieLib\Produtos\Recebimentonfe\ItensAjustes;
use OmieLib\Produtos\Recebimentonfe\ItensAtualPreco;
use OmieLib\Produtos\Recebimentonfe\ItensCOFINS;
use OmieLib\Produtos\Recebimentonfe\ItensCabec;
use OmieLib\Produtos\Recebimentonfe\ItensCustoEstoque;
use OmieLib\Produtos\Recebimentonfe\ItensICMS;
use OmieLib\Produtos\Recebimentonfe\ItensICMSSN;
use OmieLib\Produtos\Recebimentonfe\ItensICMSST;
use OmieLib\Produtos\Recebimentonfe\ItensIPI;
use OmieLib\Produtos\Recebimentonfe\ItensIde;
use OmieLib\Produtos\Recebimentonfe\ItensInfoAdic;
use OmieLib\Produtos\Recebimentonfe\ItensInfoAdicEditar;
use OmieLib\Produtos\Recebimentonfe\ItensPIS;
use OmieLib\Produtos\Recebimentonfe\ItensRecebimento;
use OmieLib\Produtos\Recebimentonfe\ItensRecebimentoEditar;
use OmieLib\Produtos\Recebimentonfe\ItensSitTribEnt;
use OmieLib\Produtos\Recebimentonfe\ItensSitTribICMSSTEnt;
use OmieLib\Produtos\Recebimentonfe\Lote_validade;
use OmieLib\Produtos\Recebimentonfe\Observacoes;
use OmieLib\Produtos\Recebimentonfe\Parcelas;
use OmieLib\Produtos\Recebimentonfe\ParcelasEditar;
use OmieLib\Produtos\Recebimentonfe\ParcelasLista;
use OmieLib\Produtos\Recebimentonfe\ParcelasListaEditar;
use OmieLib\Produtos\Recebimentonfe\RecebimentoNFeJsonClient;
use OmieLib\Produtos\Recebimentonfe\Recebimentos;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoAlterarEtapaResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoAlterarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConcAlterarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConcluirResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConsultarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoExcluirResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoListarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoReverterResponse;
use OmieLib\Produtos\Recebimentonfe\Totais;
use OmieLib\Produtos\Recebimentonfe\Transporte;

/**
 * Solicitação da alteração do recebimento da NFe
 *
 * @pw_element ide $ide Identificação da NFe de recebimento
 * @pw_element infoAdicionais $infoAdicionais Informações adicionais da NFe de recebimento
 * @pw_complex rcbtoConcAlterarRequest
 */
class RcbtoConcAlterarRequest{
	/**
	 * Identificação da NFe de recebimento
	 *
	 * @var Ide
	 */
	public Ide $ide;
	/**
	 * Informações adicionais da NFe de recebimento
	 *
	 * @var InfoAdicionais
	 */
	public InfoAdicionais $infoAdicionais;
}
